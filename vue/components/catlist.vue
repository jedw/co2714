Vue.component('catlist',{
    props: ['cats'],
    template:'<ul><li v-for="cat in cats">{{cat.name}}</li></ul>'
})