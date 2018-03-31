<!doctype html>
<html lang="de">
@include('partials.styles')
<body data-smooth-scroll-offset="77">
<a id="start"></a>
@include('partials.top', ["newsList" => $newsList])
@include('partials.header')
<div class="main-container" >
    <!--Start Hero Slider-->
    <section  class="cover height-70 imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
        <ul class="slides">
            @foreach($slides as $slide)
            <li  class="imagebg" data-overlay="6" >
                <div class="background-image-holder background--top">
                    <img alt="background" src="{{ env('API_URL').$slide->hero_image['url'] }}" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> {{ $slide->hero_heading  }}</h1>
                            <h1> {{ $slide->hero_subheading }}</h1>

                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </li>
            @endforeach
        </ul>
    </section>

    <!--End Hero Slider-->
    <!--Start Main Content-->

    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <h1>Wir beraten und verbinden ExpertInnen</h1>
                    <p class="lead">Wir freuen uns auf Sie und darauf, die für Sie besten neuen Mitarbeiterinnen und Mitarbeiter zu finden! </p>
                </div>
            </div>
        </div>
    </section>
    <section class="imageblock switchable feature-large bg--primary">
        <div class="imageblock__content col-lg-6 col-md-4 pos-right">
            <div class="background-image-holder"> <img alt="image" src="{{ asset('public/img/compnay-team.jpg') }}"> </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <h2>So wie wir Menschen sind auch Unternehmen mitsamt ihren Strukturen</h2>
                    <p class="lead">Arbeitsweisen und Anforderungen verschieden. Wir kennen diese Unterschiede, hören aktiv zu und gestalten den Prozess gemeinsam und in Absprache mit Ihnen, um bestmögliche Ergebnisse zu gewährleisten.</p>
                    <p class="lead">Wir nehmen unsere Gegenüber ernst, stehen Ihnen beratend zur Seite und ermitteln Ihren individuellen Bedarf und die dafür zielführendste Strategie. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="imageblock switchable feature-large switchable--switch bg--secondary">
        <div class="imageblock__content col-lg-6 col-md-4 pos-right">
            <div class="background-image-holder"> <img alt="image" src="{{ asset('public/img/ingenieursbranche.jpg') }}"> </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <h2>Mit uns als Partner wählen Sie eine Zusammenarbeit</h2>
                    <p class="lead">Die von einem vertrauensvollen und zuverlässigen Miteinander geprägt ist. Diesen Ansatz ergänzen wir mit fachlicher Kompetenz und den Anspruch effektiver Arbeit und persönlichen Ehrgeiz.<br><br>Der Erfolg bestätigt unsere Annahme, dass auch Unternehmen eine andere Art von Kultur bei ihren externen Partnerschaften <br>wünschen: bereits kurz nach unserer Gründung haben wir bereits diverse Unternehmen der IT- und Ingenieursbranche erfolgreich beraten und bei der Besetzung offener Stellen unterstützt.&nbsp;<br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="imageblock switchable feature-large bg--primary">
        <div class="imageblock__content col-lg-6 col-md-4 pos-right">
            <div class="background-image-holder"> <img alt="image" src="{{ asset('public/img/extra-mile.jpg') }}"> </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <h2>Unser Selbstanspruch geht noch weiter</h2>
                    <p class="lead">Auch nach einer erfolgreichen Vermittlung lassen wir weder das Unternehmen noch die vermittelten Kandidaten allein. Wir stehen weiterhin unterstützend an Ihrer Seite (ob Wohnungssuche oder Visabeschaffung, unsere weitreichende Erfahrung steht Ihnen auch hierbei zur Verfügung).&nbsp;</p>
                    <p class="lead">Für uns ist die Erfolgsgeschichte erst dann geschrieben, wenn gewährleistet ist, dass alle Beteiligten auch noch Jahre nach dem Erstkontakt gern an uns zurückdenken mit dem Gefühl, gut beraten und konstruktiv unterstützt worden zu sein. Wie auch immer der Prozess gestaltet werden soll, wir nehmen uns gern die Zeit, um auf individuelle Vorstellungen einzugehen, und wir sind flexibel und erfahren genug, diese adäquat umzusetzen.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Start Social Media Feeds-->
    <section id="social-feeds"  class="text-center bg--secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <h2>Social Media Feed</h2>
                    <div  class="slider" data-paging="true">
                        <ul  class="slides">
                            @foreach($feeds as $feed)
                            <li>
                                <div class="testimonial">
                                    <blockquote> “ {{  $feed->message }} ” </blockquote>
                                    <h5>{{  $feed->social_user }}</h5>
                                    <span>{{  $feed->source }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Social Media Feeds-->
    <!--Start Contact & Map-->
    <section id="contact" class="switchable bg--primary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="map-container border--round"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.163491490424!2d13.403159115807862!3d52.5304760798162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a851e36b8d9d67%3A0x2be3a8fc17f7c191!2sZehdenicker+Str.+21%2C+10119+Berlin!5e0!3m2!1sen!2sde!4v1520960173622" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="text-block">
                        <h1>Kontakt</h1>
                        <p class="lead"> E: <a href="#">hello@elephant-hr.de</a><br>+49 30 585841982</p>
                        <p class="lead"> Haben Sie eine Frage oder möchten Sie mehr darüber erfahren ? Füllen Sie einfach die unten stehenden Felder aus; wir werden dann in Kürze auf Sie zukommen.</p>
                    </div>
                    <form class="form-email row" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                        <div class="col-md-6 col-12"> <label>Name:</label> <input type="text" name="name" class="validate-required"> </div>
                        <div class="col-md-6 col-12"> <label>Email Addresse:</label> <input type="email" name="email" class="validate-required validate-email"> </div>
                        <div class="col-md-12 col-12"> <label>Nachricht:</label> <textarea rows="3" name="message" class="validate-required"></textarea> </div>
                        <div class="col-md-5 col-lg-4 col-6"> <button type="submit" class="btn btn--primary type--uppercase">Senden</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--End Contact & Map-->
    <!--End Main Content-->

    @include('partials.footer')
    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
        <i class="stack-interface stack-up-open-big"></i>
    </a>
</div>
@include('partials.scripts')

 <script>
    $(document).ready(function() {

        function submitDetailsForm() {
           alert('khawja');
        }

    });
</script>
</body>
</html>