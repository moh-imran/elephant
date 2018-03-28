<!doctype html>

<html lang="de">
@include('partials.styles')
<body data-smooth-scroll-offset="77">
<a id="start"></a>

@include('partials.top', ["newsList" => $newsList])
@include('partials.header')

<!--End Nav-->
<div class="main-container">

    <!--Start Main Content-->
    <section class="cover imagebg text-center parallax height-50" data-overlay="6">
        <div class="background-image-holder"> <img alt="background" src="public/img/hero-slider/hero-image-3.jpg"> </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-md-12">
                    <h1> Build Your Dream Job </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Multiselect with search -->



    <section id="app">
        <div class="container">
            <form>

                <div class="form-steps">
                    <ul>
                        <li v-bind:class="{ current: step == 1 }"><a @click.prevent="stepOne()" style="cursor: pointer;">Step 1</a></li>
                        <li v-bind:class="{ current: step == 2 }"><a @click.prevent="stepTwo()" style="cursor: pointer;">Step 2</a></li>
                        <li v-bind:class="{ current: step == 3 }"><a @click.prevent="stepThree()" style="cursor: pointer;">Finish</a></li>
                    </ul>
                </div>

                <div v-if="step == 1" >


                    {{--<h1 class="heading">Step One</h1>--}}
                    <div class="form-holder">
                        <div class="error-msgs" v-if="errors.length">
                            <strong>Please correct the following error(s):</strong>
                            <ul>
                                <li v-for="error in errors">@{{ error }}</li>
                            </ul>
                        </div>
                        <div class="form-group input-icon">
                            <i class="material-icons">person</i>
                            <input type="text" id="name" name="name" v-model="registration.name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group input-icon">
                            <i class="material-icons">email</i>
                            <input id="email" name="email" type="email" v-model="registration.email" placeholder="Email">
                        </div>
                        <div class="form-group input-icon">
                            <i class="material-icons">map</i>
                            <input id="location" name="location" type="text" v-model="registration.location" placeholder="Location">
                        </div>
                        <div class="form-group text-center">
                            <button @click.prevent="next()" style="cursor: pointer;">Next <i class="material-icons">keyboard_arrow_right</i></button>
                        </div>
                    </div>
                </div>

                <div v-if="step == 2">
                    {{--<h1 class="heading">Step Two</h1>--}}

                    <div class="form-holder">
                        <div v-if="errors.length">
                            <strong>Please correct the following error(s):</strong>
                            <ul>
                                <li v-for="error in errors">@{{ error }}</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <multiselect
                                    v-model="registration.industry"
                                    :multiple="true"
                                    placeholder="Pick industries"
                                    :options="industryOptions"
                            >
                            </multiselect>
                        </div>
                        <div class="form-group">
                            <!--<legend for="street">Position:</legend>-->
                            <!--<input id="position" name="position" v-model="registration.position">-->
                            <multiselect
                                    v-model="registration.position"
                                    :multiple="true"
                                    placeholder="Pick positions"
                                    :options="positionOptions"
                            >
                            </multiselect>
                        </div>
                        <div class="form-group">
                            <!--<legend for="street">Key Skills :</legend>-->
                            <!--<input id="key_skills" name="key_skills" v-model="registration.key_skills">-->

                            <multiselect
                                    v-model="registration.key_skills"
                                    :multiple="true"
                                    placeholder="Pick skills"
                                    :options="keySkillsOptions"
                            >
                            </multiselect>
                        </div>
                        <div class="form-group">
                            <!--<legend for="street">Environment:</legend>-->
                            <!--<input id="environment" name="environment" v-model="registration.environment">-->
                            <multiselect
                                    v-model="registration.environment"
                                    placeholder="Pick environment"
                                    :options="environmentOptions"
                            >
                            </multiselect>
                        </div>
                        <div class="form-group">

                            <multiselect
                                    v-model="registration.salary_expectation"
                                    placeholder="Salary expectations"
                                    :options="salaryOptions"
                            >
                            </multiselect>
                        </div>
                        <div class="form-group text-center">
                            <button @click.prevent="prev()" class="previous-btn" style="cursor: pointer;"><i class="material-icons">keyboard_arrow_left</i> Previous</button>
                            <button @click.prevent="next()" style="cursor: pointer;">Next <i class="material-icons">keyboard_arrow_right</i></button>
                        </div>
                    </div>
                </div>

                <div v-if="step === 3">
                    {{--<h1 class="heading">Step Three</h1>--}}



                    <div class="form-holder">
                        <div style="background-color: green;color: white;text-align: center;" class="alert alert-success"  v-if="success.length">
                            <strong>Application sent successfully.</strong>

                        </div>
                        <ul style="padding-left: 239px;">
                            <li v-for="(item, index) in registration">
                                <strong v-if="index == 'name'">Name :</strong>
                                <strong v-if="index == 'email'">Email :</strong>
                                <strong v-if="index == 'location'">Location :</strong>
                                <strong v-if="index == 'industry'">Industries :</strong>
                                <strong v-if="index == 'position'">Positions :</strong>
                                <strong v-if="index == 'key_skills'">Key Skills :</strong>
                                <strong v-if="index == 'environment'">Environment :</strong>
                                <strong v-if="index == 'salary_expectation'">Salary Expectation :</strong>

                                <span>@{{ item.toString() }}</span>
                            </li>
                        </ul>


                        <div class="form-group text-center">
                            <button @click.prevent="prev()" class="previous-btn" style="cursor: pointer;"><i class="material-icons">keyboard_arrow_left</i> Previous</button>
                            <button @click.prevent="submit()" style="cursor: pointer;">Save</button>

                        </div>


                    </div>
                </div>
            </form>

            {{--<br/><br/>Debug: @{{registration}}--}}
        </div>

    </section>

    @include('partials.footer')
    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
        <i class="stack-interface stack-up-open-big"></i>
    </a>
</div>

@include('partials.scripts')
<script src="public/js/vue/jobForm.js"> </script>
</body>
</html>