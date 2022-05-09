var app=new Vue({
    el: '#app',
    data:{
        array:[],
    },
    created() {
        axios.get('file:///C:/MAMP/htdocs/PHP/php-ajax-dischi/milestone2/api.php')
        .then((res)=>{
            console.log(res)
        })
    },
})