

new Vue({
    el:'#app',
    components: {
        Multiselect: window.VueMultiselect.default
    },
    cache: false,
    data : {
            selected:null,
            categories:[],
            step: 1,
            registration : {
                name:null,
                email:null,
                location:null,
                // industry:{ language: 'JavaScript', library: 'Vue-Multiselect' },
                industry:null,
                position:null,
                key_skills:null,
                environment:null,
                salary_expectation:null
            },
        industryOptions: [
                    'Option One', 'Option Two', 'Option Three'
            ],
        positionOptions: [
                    'Option One', 'Option Two', 'Option Three'
            ],
        keySkillsOptions: [
                    'Option One', 'Option Two', 'Option Three'
            ],
        environmentOptions: [
                    'Option One', 'Option Two', 'Option Three'
            ],
        salaryOptions: [
                    'Option One', 'Option Two', 'Option Three'
            ],
        success:[],
        errors:[]

    },
    methods:{
        // customLabel: function (option) {
        //     return `${option.library} - ${option.language}`
        // },

        prev : function() {
            this.step--;
        },
        next : function() {

            this.errors = [];

            if(this.step == 1){

                if(!this.registration.name){
                    this.errors.push("Name required.");
                }

                if(!this.registration.email){
                    this.errors.push("Email required.");
                }

                if(!this.validateEmail(this.registration.email)){
                    this.errors.push("Email invalid.");
                }

                if(this.registration.location == null){
                    this.errors.push("Location required.");
                }

                if (!this.errors.length){
                    this.step++;
                    console.log('step number', this.step);
                }
            }
            else if(this.step == 2){

                if(!this.registration.industry){
                    this.errors.push("Industry required.");
                }

                if(!this.registration.position){
                    this.errors.push("Position required.");
                }

                if(!this.registration.key_skills){
                    this.errors.push("Key Skills required.");
                }

                if(!this.registration.environment){
                    this.errors.push("Environment required.");
                }

                if(!this.registration.salary_expectation){
                    this.errors.push("Salary required.");
                }

                if (!this.errors.length){
                    this.step++;
                    //console.log('indus', this.registration);
                }
            }
        },
        validateEmail : function (email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        },
        stepOne : function() {
            this.step = 1;
        },
        stepTwo : function() {
            this.step = 2;
        },
        stepThree : function() {

            this.step = 3;
        },
        submit : function() {

            // GET /someUrl
            this.$http.post('/dev/build-job', this.registration).then(response => {

                this.success.push('Application sent successfully.');
                console.log("response", response);
                setTimeout(
                    window.location.href = '/dev'
                    , 10000);

        }, response => {
                // error callback
            });
        }
    }
});

