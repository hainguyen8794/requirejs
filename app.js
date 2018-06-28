require(["lib/knockout-2.2.0.debug", "formbind", "lib/domReady!"], 
function (ko, formbindAppObject) { 
	ko.applyBindings(new formbindAppObject());
});
