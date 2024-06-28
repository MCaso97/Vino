@extends('layouts.app')

@section('content')
<div class="container" id="register_container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card custom_login shadows">
                <div class="card-header">
                    <h1>{{ __('Register') }}</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <p>Select the account type</p>
                        <ul id="account_type_selector" class="row">
                            <div class="col-4">
                                <li @click="setUserTab">
                                    <a type="submit" class="btn btn-primary" :class="{ 'primary_button': isUserTabSelected }">User</a>
                                </li>
                            </div>
                            <div class="col-4">
                                <li @click="setWineryTab">
                                    <a type="submit" class="btn btn-primary" :class="{ 'primary_button': isWineryTabSelected }">Winery</a>
                                </li>
                            </div>
                            <div class="col-4">
                                <li @click="setSellerTab">
                                    <a type="submit" class="btn btn-primary" :class="{ 'primary_button': isSellerTabSelected }">Seller</a>
                                </li>
                            </div>
                        </ul>

                        <input type="hidden" name="roles[]" value="user" v-if="isUserTabSelected">
                        <input type="hidden" name="roles[]" value="winery" v-if="isWineryTabSelected || (isSellerTabSelected && is_also_winery)">
                        <input type="hidden" name="roles[]" value="seller" v-if="isSellerTabSelected || (isWineryTabSelected && is_also_seller)">

                        <div class="row mb-3">
                            <div class="col">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" v-if="isUserTabSelected">
                            <div class="col">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="Surname" value="{{ old('surname')}}" required autocomplete="surname">

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3" v-if="isWineryTabSelected || isSellerTabSelected">
                            <div class="col">
                                <input id="vat" type="text" class="form-control @error('vat') is-invalid @enderror" name="vat" placeholder="Vat" value="{{ old('vat') }}" required autocomplete="vat">

                                @error('vat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" v-if="isWineryTabSelected || isSellerTabSelected">
                            <div class="col">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" v-if="isWineryTabSelected">
                            <div class="col registration_checkbox_container">
                                <input id="is_also_seller" type="checkbox" v-model="is_also_seller">
                                <label for="is_also_seller">Is the winery also a wine seller?</label>
                            </div>
                        </div>

                        <div class="row mb-3" v-if="isSellerTabSelected">
                            <div class="col registration_checkbox_container">
                                <input id="is_also_winery" type="checkbox" v-model="is_also_winery">
                                <label for="is_also_winery">Is the wine seller also a winery?</label>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col">
                                <button type="submit" class="btn btn-primary primary_button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="module">
    import {createApp} from "vue";

    const app = createApp({
        data() {
            return {
                selected_tab: 1,
                is_also_seller: false,
                is_also_winery: false
            }
        },
        computed: {
            isUserTabSelected() {
                return this.selected_tab === 1;
            },
            isWineryTabSelected() {
                return this.selected_tab === 2;
            },
            isSellerTabSelected() {
                return this.selected_tab === 3;
            }
        },
        methods: {
            setUserTab() {
                this.selected_tab = 1;
            },
            setWineryTab() {
                this.selected_tab = 2;
            },
            setSellerTab() {
                this.selected_tab = 3;
            },
            submitForm() {
                let roles = [];
                let user = {
                    "name": this.name,
                    "email": this.email,
                    "password": this.password,
                    "password_confirmation": this.password_confirm
                };
                
                if (this.isWineryTabSelected) {
                    roles.push('winery');

                    if (this.is_also_seller) {
                        roles.push('seller');
                    }

                    user.vat = this.vat; 
                    user.address = this.address;
                    user.roles = roles;
                } else if (this.isSellerTabSelected) {
                    roles.push('seller');

                    if (this.is_also_winery) {
                        roles.push('winery');
                    }

                    user.vat = this.vat; 
                    user.address = this.address;
                    user.roles = roles;
                } else if (this.isUserTabSelected) {
                    roles.push('user');

                    user.surname = this.surname;
                    user.roles = roles;
                }

                user._token = document.getElementsByName("csrf-token")[0].content;
                
                axios.post("{{ route('register') }}", user)
                .then(function (res) {
                    console.log(res);
                }).catch(function (err) {
                    console.err(err)
                });

            } 
        }
    }).mount("#register_container");
</script>
@endsection