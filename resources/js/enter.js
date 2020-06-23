import Vue from 'vue'
import Axios from 'axios';
import { inArray } from 'jquery';


var Reg = new Vue({
    el: '#register',
    data: {
        roleId: null,
        locations: [],
        states:[],
        userState: '',
        filteredStates:'',


    },
    methods: {
        changeRoleId(e) {
            let index = (e.target.options.selectedIndex)
            this.roleId = (e.target.options[index].value)
        },

        async getLocations(callback) {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/locations');
                this.locations = response.data;
                callback(this.locations)
            } catch (error) {
                console.error(error);
            }
        },
        uniqState(){

            let states =    this.locations.map(function(value, index, self){
                return value.state;
            });

            this.states = [...new Set(states)]

        },
        filterStates(){
            let stateRef = this.$refs.states
            if(this.userState!=null){
                stateRef.setAttribute('size',5);

            }else{
                stateRef.removeAttribute('size');
            }
        },
        selectState(state){
            let stateRef = this.$refs.states
            stateRef.removeAttribute('size');
            this.userState = state;
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

        fStates(){

           return this.states.filter((value,index,self)=>{
               if(this.userState =='' || this.userState==null){
                    return true;
               }
                if(this.userState!='' && value.includes(this.userState)){
                    return true;
                }
            })

        }




    },
    mounted() {
        let index = (this.$refs.roleId.options.selectedIndex)
        this.roleId = (this.$refs.roleId.options[index].value)
    },
    created() {
        //get all locations

        let that = this;
        that.getLocations(that.uniqState);


        //filter location and unique it with city
    }
})
