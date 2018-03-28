<!doctype html>

<html lang="de">
@include('partials.styles')
<body data-smooth-scroll-offset="77">
<a id="start"></a>

@include('partials.top')
@include('partials.header')

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
                <div v-if="step == 1" >


                    <h1 class="heading">Step One</h1>
                    <div class="form-holder">
                        @{{  errors.length }}
                        <div class="error-msgs" v-if="errors.length">
                            <strong>Please correct the following error(s):</strong>
                            <ul>
                                {{--<li v-for="error in errors">@{{ error }}</li>--}}
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="text" id="name" name="name" v-model="registration.name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input id="email" name="email" type="email" v-model="registration.email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input id="location" name="location" type="text" v-model="registration.location" placeholder="Location">
                        </div>
                        <div class="form-group text-center">
                            <button @click.prevent="next()" style="cursor: pointer;">Next</button>
                        </div>
                    </div>
                </div>

                <div v-if="step == 2">
                    <h1 class="heading">Step Two</h1>

                    <div class="form-holder">
                        <div v-if="errors.length">
                            <strong>Please correct the following error(s):</strong>
                            <ul>
                                {{--<li v-for="error in errors">{{ error }}</li>--}}
                            </ul>
                        </div>
                        <div class="form-group">
                            <multiselect
                                    v-model="registration.industry"
                                    placeholder="Industry"
                                    :multiple="true"
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
                                    :options="keySkillsOptions"
                            >
                            </multiselect>
                        </div>
                        <div class="form-group">
                            <!--<legend for="street">Environment:</legend>-->
                            <!--<input id="environment" name="environment" v-model="registration.environment">-->
                            <multiselect
                                    v-model="registration.environment"
                                    :options="environmentOptions"
                            >
                            </multiselect>
                        </div>
                        <div class="form-group text-center">
                            <button @click.prevent="prev()" style="cursor: pointer;" class="previous-btn">Previous</button>
                            <button @click.prevent="next()" style="cursor: pointer;">Next</button>
                        </div>
                    </div>
                </div>

                <div v-if="step === 3">
                    <h1 class="heading">Step Three</h1>

                    <div class="form-holder">
                        <ul>
                            <li v-for="(item, index) in registration">
                                {{--<strong>{{ index }} :</strong>--}}
                                {{--<span>{{ item }}</span>--}}
                            </li>
                        </ul>
                        <!--<p>-->
                        <!--<legend for="numtickets">Number of Tickets:</legend>-->
                        <!--<input id="numtickets" name="numtickets" type="number" v-model="registration.numtickets">-->
                        <!--</p>-->

                        <!--<p>-->
                        <!--<legend for="shirtsize">Shirt Size:</legend>-->
                        <!--<select id="shirtsize" name="shirtsize" v-model="registration.shirtsize">-->
                        <!--<option value="S">Small</option>-->
                        <!--<option value="M">Medium</option>-->
                        <!--<option value="L">Large</option>-->
                        <!--<option value="XL">X-Large</option>-->
                        <!--</select>-->
                        <!--</p>-->

                        <div class="form-group text-center">
                            <button @click.prevent="prev()" style="cursor: pointer;" class="previous-btn">Previous</button>
                            <button @click.prevent="submit()" style="cursor: pointer;" >Save</button>

                        </div>
                    </div>
                </div>
            </form>

            {{--<br/><br/>Debug: {{registration}}--}}
        </div>

    </section>

    @include('partials.footer')

    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
        <i class="stack-interface stack-up-open-big"></i>
    </a>
</div>
@include('partials.scripts')
</body>
</html>