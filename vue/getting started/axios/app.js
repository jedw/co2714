var app = new Vue({
    el: '#app',
    data:{
        items:[],
        newItem: '',
        isHighlighted: false
    },
    mounted(){
        axios.get('returnitems.php').then(response => (this.items = response.data))
    },
    methods:{
        addItem: function(){
            var j = !this.isHighlighted ? this.items.push({thing: this.newItem}) : this.items.push({thing: this.newItem, highlighted : true});
            axios.post('insert.php',{new: this.newItem, highlight: this.isHighlighted})
            this.newItem = ''
        },
        clearItems: function(){
            this.items = []
        }
    }
})
