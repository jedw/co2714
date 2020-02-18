var app = new Vue({
	el: '#myapp',
	data:{
		members: [],
		search: {keyword: ''},
		noMember: false
	},

	mounted: function(){
		this.fetchMembers();
	},

	methods:{
		searchMonitor: function() {
			var keyword = app.toFormData(app.search);
	   		axios.post('action.php?action=search', keyword)
				.then(function(response){
					app.members = response.data.members;

					if(response.data.members == ''){
						app.noMember = true;
					}
					else{
						app.noMember = false;
					}
				});
       	},

       	fetchMembers: function(){
			axios.post('action.php')
				.then(function(response){
					app.members = response.data.members;
				});
       	},

		toFormData: function(obj){
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		},

	}
});