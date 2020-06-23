import Vue from 'vue'
import Axios from 'axios';
import { inArray } from 'jquery';


var Reg = new Vue({
    el: '#register',
    data: {
        roleId: null,
        locations: [], // all locations get by ajax
        states:[], // all location object filtered by state
        userState: '',// state string typed by user from input
        filteredStates:'',// just for now is useless maybe later,

        cities:[],// all location object filtered by city
        userCity: '', //city string typed by user from input


    },
    methods: {
        /**
         * change role id
         * @param {event} e event object when click on element
         */
        changeRoleId(e) {
            let index = (e.target.options.selectedIndex)
            this.roleId = (e.target.options[index].value)
        },

        /**
         *  get all location by ajax from api
         *
         * @param {uniqueState or uniqueCity} callback uniqueState or uniqueCity function
         */
        async getLocations(callbackState,callbackCity) {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/locations');
                this.locations = response.data;
                callbackState(this.locations)
                callbackCity(this.locations)
            } catch (error) {
                console.error(error);
            }
        },
        /**
         * unique locations by state property
         */
        uniqState(){

           this.states = this.unique(this.locations,'state')

        },

        /**
         * unique locations by city property
         */
        uniqCity(){

            this.cities = this.unique(this.locations,'city')

         },

        /**
         * filter states object by UserState string when typing
         */
        filterStates(){
            let stateRef = this.$refs.states

            if(this.userState!=null){
                stateRef.setAttribute('size',this.fStates>5 ? 5 : this.fStates.length);

            }else{
                stateRef.removeAttribute('size');
            }

            if(this.fStates.length==1){
                this.userState = this.fStates[0].state
                stateRef.options.defaultSelected=true
            }else{
                stateRef.options.defaultSelected=false

            }
        },


        /**
         * filter cities object by Usercity string when typing
         */
        filterCities(){
            let cityRef = this.$refs.cities

            if(this.userCity !=null){
                cityRef.setAttribute('size',this.fCities.length>5 ? 5 : this.fCities.length);

            }else{
                cityRef.removeAttribute('size');
            }

            if(this.fCities.length==1){
                this.userCity = this.fCities[0].city
                stateRef.options.defaultSelected=true

            }else{
                stateRef.options.defaultSelected=false
            }
        },

        /**
         *
         * @param {state} state  selected state object
         */
        selectState(state){
            let stateRef = this.$refs.states
            stateRef.removeAttribute('size');
            this.userState = state.state;
        },


         /**
         *
         * @param {city} city  selected city object
         */
        selectCity(city){
            let cityRef = this.$refs.cities
            cityRef.removeAttribute('size');
            this.userCity = city.city;
        },


        /**
         *
         * @param {array} unUniqueData array Object [{id:1,city:'one',state:'ku'}]
         * @param {string} flag property object 'state'
         */
        unique(unUniqueData,flag) {

            let uniqueData=Array();

            unUniqueData.forEach(element => {
                let find = uniqueData.find((value) => {
                            return element[String(flag)] == value[String(flag)];
                        })

                if(find  !=null && Object.keys(find).length>0){

                }else{
                    uniqueData.push(element)
                }

            });
            return uniqueData;
        }

    },
    computed: {
        isWholesaler() {
            if (this.roleId == 3) {
                return true;
            } else {
                return false;
            }
        },

        /**
         * filter states array by userState string and return it
         */
        fStates(){

           return this.states.filter((value,index,self)=>{
                if(this.userState =='' || this.userState==null){
                    return true;
                }
                if(this.userState!='' && value.state.includes(this.userState)){
                    return true;
                }
            })

        },

        /**
         * filter cities array by userCity string and return it
         */
        fCities(){

            return this.cities.filter((value,index,self)=>{
                if(this.userCity =='' || this.userCity==null){
                     return true;
                }
                 if(this.userCity != '' && value.city.includes(this.userCity)){
                     return true;
                 }
             })

         }




    },

    mounted() {

        // alert('before')
        let index = (this.$refs.roleId.options.selectedIndex)
        // alert(index)
        this.roleId = (this.$refs.roleId.options[index].value)
        // alert('after')
    },
    created() {

        /**
         * get all locations by ajax and get unique state for promise base returned
         */
        let that = this;
        that.getLocations(that.uniqState,that.uniqCity);


        //filter location and unique it with city
    }
})
