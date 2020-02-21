var app = new Vue({
el: '#app',
data:{
    items:[
        {text:'Learn javascript'},
        {text:'Learn Vue'},
        {text:'Take over world'}
    ],
    newItem: '',
    isHighlighted: false
},
methods:{
    addItem: function(){
        if(!this.isHighlighted){
            this.items.push({text: this.newItem})
        }else{
            this.items.push({text: this.newItem, highlighted: true})
        }
        this.newItem = ''
    },
    clearItems: function(){
        this.items = []
    }
}
})
