import Vue from 'vue'


var Reg = new Vue({
    el:'#register',
    data:{
        roleId:null,
    },
    methods:{
        changeRoleId(e){
            let index = (e.target.options.selectedIndex)
            this.roleId = (e.target.options[index].value)
        }
    },
    computed:{
        isWholesaler(){
            if(this.roleId == 3){
                return true;
            }else{
                return false;
            }
        }
    },
    mounted(){
        let index = (this.$refs.roleId.options.selectedIndex)
        this.roleId = (this.$refs.roleId.options[index].value)
    }
})


