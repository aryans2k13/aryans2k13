(function () {
	var displayOnlineStatus = document.getElementById("online-status"),
		isOnline = function () {
			displayOnlineStatus.innerHTML = "Online";
			displayOnlineStatus.className = "online";
		},
		isOffline = function () {
			displayOnlineStatus.innerHTML = "Offline";
			displayOnlineStatus.className = "offline";
		};
		
	if (window.addEventListener) {
        /*
            Works well in Firefox and Opera with the 
            Work Offline option in the File menu.
            Pulling the ethernet cable doesn't seem to trigger it.
            Later Google Chrome and Safari seem to trigger it well
        */
		window.addEventListener("online", isOnline, false);
		window.addEventListener("offline", isOffline, false);
	}
	else {
		/*
			Works in IE with the Work Offline option in the 
			File menu and pulling the ethernet cable
		*/
		document.body.ononline = isOnline;
		document.body.onoffline = isOffline;
	}
})();		