define(['lib/knockout-2.2.0.debug'], function (ko) {
	return function AppViewModel() {
		window.dataModel = this;
	    	this.firstName = ko.observable("Nguyen Hoang");
	    	this.lastName = ko.observable("Hai");
		this.fullName = ko.computed(function() {
	    		return this.firstName() + " " + this.lastName();    
		}, this);
	}
});

