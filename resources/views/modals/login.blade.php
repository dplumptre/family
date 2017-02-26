<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h1 class="h2">WELCOME BACK</h1>
                </div>

                <div class="block-content block-content-full block-content-narrow">
                    <div class="error-message pull-center" v-show="loginError">@{{ loginError }}</div>
                    <form @submit.prevent="submitForm" class="js-validation-login form-horizontal push-30-t push-50"
                          action="#" method="post" novalidate="novalidate" autocomplete="off">
                        <div class="form-group" v-bind:class="hasEmailError">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="text" id="email"
                                           name="email" v-model="formInputs.email">
                                    <label for="email">Email</label>
                                </div>
                                <div class="help-block text-right animated fadeInDown" v-show="formErrors['email']" v-text="formErrors['email'][0]"></div>
                            </div>
                        </div>
                        <div class="form-group" v-bind:class="hasPasswordError">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="password" id="password"
                                           name="password" v-model="formInputs.password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="help-block text-right animated fadeInDown" v-show="formErrors['password']" v-text="formErrors['password'][0]"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="rememberMe"
                                           name="rememberMe" v-model="formInputs.rememberMe"><span></span> Remember Me?
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button class="btn btn-block btn-primary btn-lg" type="submit">
                                    <i class="fa fa-sign-in fa-lg" aria-hidden="true" style="" v-show="!loading"></i>
                                    <i class="fa fa-spinner fa-pulse fa-lg fa-fw" style="" v-show="loading"></i>
                                    Log in
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix">
                        <div class="pull-left"><a href="#">Forgot Password?</a></div>
                        <div class="pull-right"><a href="#">Register</a></div>
                    </div>
                    <hr class="hr-text" data-content="OR">
                    <button class="btn btn-block btn-primary push-10" type="button">
                        <i class="fa fa-facebook pull-left"></i> Login with Facebook
                    </button>
                    <button class="btn btn-block btn-danger push-10" type="button">
                        <i class="fa fa-google-plus pull-left"></i> Login with Google+
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script>

        Vue.prototype.$http = axios;
        var app = new Vue({
            el: '#modal-login',
            data: {
                formInputs: {},
                formErrors: {
                    email: [],
                    password: []
                },
                loginError: '',
                loading: false,
            },
            computed: {
                hasEmailError: function(){
                    if ( this.formErrors.email.length ){
                        return 'has-error';
                    }
                },
                hasPasswordError: function(){
                    if ( this.formErrors.password.length ) {
                        return 'has-error';
                    }
                }
            },
            methods: {
                submitForm: function () {
                    //reset form errors
                    this.formErrors = {email:[],password:[]};
                    this.loginError = '';
                    this.loading = true;
                    var $this = this;
                    this.$http.post('/user/login', this.formInputs, {
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="_token"]').getAttribute('value'),
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            })
                            .then(function (response) {
                                //we got a response
                                $this.loading = false;
                                //if response is good
                                if ( response.data.success == true && response.status == 200 && response.statusText == 'OK' ) {
                                    //redirect to dashboard
                                    window.location = '{{route('dashboard')}}'

                                } else {
                                    //response not good | display error message
                                    $this.loginError = response.data.message;
                                }
                            })
                            .catch(function (error) {
                                //we got an error
                                $this.loading = false;

                                if (error.response) {
                                    console.log(error.response.data);
                                    $this.formErrors = error.response.data;
                                } else {
                                    console.log('Error', error.message);
                                }
                            });

                }
            }
        });
    </script>
@endsection