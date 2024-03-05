@extends('profile.Profile')
@section('content-profile')


                                <form action="./profile.html" class="form form-card">
                                    <!-- Form row 1 -->
                                    <div class="form__row">
                                        <div class="form__group">
                                            <label for="full-name" class="form__label form-card__label">
                                                Full name
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="text"
                                                    name=""
                                                    id="full-name"
                                                    placeholder="Full name"
                                                    class="form__input"
                                                    required
                                                    autofocus
                                                />
                                                <img
                                                    src="./assets/icons/form-error.svg"
                                                    alt=""
                                                    class="form__input-icon-error"
                                                />
                                            </div>
                                            <p class="form__error">Please enter your full name</p>
                                        </div>
                                        <div class="form__group">
                                            <label for="email-adress" class="form__label form-card__label">
                                                Email address
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="text"
                                                    name=""
                                                    id="email-adress"
                                                    placeholder="Email address"
                                                    class="form__input"
                                                    required
                                                />
                                                <img
                                                    src="./assets/icons/form-error.svg"
                                                    alt=""
                                                    class="form__input-icon-error"
                                                />
                                            </div>
                                            <p class="form__error">Please enter a valid email address</p>
                                        </div>
                                    </div>

                                    <!-- Form row 2 -->
                                    <div class="form__row">
                                        <div class="form__group">
                                            <label for="phone-number" class="form__label form-card__label">
                                                Phone Number
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="text"
                                                    name=""
                                                    id="phone-number"
                                                    placeholder="Phone Number"
                                                    class="form__input"
                                                    required
                                                />
                                                <img
                                                    src="./assets/icons/form-error.svg"
                                                    alt=""
                                                    class="form__input-icon-error"
                                                />
                                            </div>
                                            <p class="form__error">Please enter a valid phone number</p>
                                        </div>
                                        <div class="form__group">
                                            <label for="passowrd" class="form__label form-card__label">
                                                Password
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="password"
                                                    name=""
                                                    id="passowrd"
                                                    placeholder="Password"
                                                    class="form__input"
                                                    required
                                                />
                                                <img
                                                    src="./assets/icons/form-error.svg"
                                                    alt=""
                                                    class="form__input-icon-error"
                                                />
                                            </div>
                                            <p class="form__error">Please enter new password</p>
                                        </div>
                                    </div>

                                    <div class="form-card__bottom">
                                        <a class="btn btn--text" href="./profile.html">Cancel</a>
                                        <button class="btn btn--primary btn--rounded">Save</button>
                                    </div>
                                </form>
@endsection
