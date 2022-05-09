var app=new Vue({
    el: '#app',
    data:{
        array:[],
    },
    created() {
        axios.get('http://localhost/PHP/php-ajax-dischi/milestone2/api/api.php')
        .then((res)=>{
            console.log(res.data)
            this.array=res.data
            console.log(this.array)
        })
    },
})