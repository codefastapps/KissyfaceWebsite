<?php include "header.php"; ?>
	  
	  <div class="jumbotron">
        <h1>Get Our Apps</h1>
        <p class="lead">Kissyface Interactive, LLC, is an approved Apple Developer. All of our apps are available at the Apple iOS App Store. We have apps for children and grown-ups. Try one today!</p>
        <p><a class="btn btn-lg btn-success" href="https://itunes.apple.com/us/artist/kissyface-interactive/id524456157" role="button">Download at the App Store</a></p>
      </div>
      
	  <script>
	  	boolPageReady = false;
	  	boolDataReady = false;
	  	objAppsData = {};
	  	
	  	function funLocalStartup(){
	  		// Change Navigation Link to Active
	  		document.getElementById("linkApps").className = "active";
	  		// Set Page Ready Flag
	  		boolPageReady = true;
	  		// Try to Start Page
	  		funPageDataReady();
	  	}
	  	
	  	function funAppsLoaded(incAppsData){
	  		// Get Apps Data into objAppsData
	  		objAppsData = incAppsData.results;
	  		// Set Data Ready Flag
	  		boolDataReady = true;
	  		// Try to Start Page
	  		funPageDataReady();
	  	}
	  	
	  	function funPageDataReady(){
	  		if(boolPageReady && boolDataReady){
	  			// Set New Row Id
	  			var strNewRowId = "";
	  			// Set Row Counter
	  			var intRowCounter = 0;
	  			// Find Container
	  			var elmPageContainer = document.getElementById("divContainer");
	  			// Find Footer
	  			var elmFooter = document.getElementById("divFooter");
	  			// Temporarily Remove Footer
	  			elmPageContainer.removeChild(elmFooter);
	  			// Get Number of Apps
	  			var intNumberOfApps = objAppsData.length;
	  			// Loop Through Apps
	  			for(var i=0;i<intNumberOfApps;i++){
	  				// If it Divides With a 1 Remainder
	  				if((i+1) % 6 == 1){
	  					// Increase the Row Counter
	  					intRowCounter++;
	  					// Create Row Id
	  					strNewRowId = "divAppRow" + intRowCounter;
	  					// Add the Row
	  					elmNewRow = document.createElement("div");
	  					elmNewRow.className = "row marketing";
	  					elmNewRow.setAttribute("id", strNewRowId);
	  					elmPageContainer.appendChild(elmNewRow);
	  				}
	  				// Find the Current Row
	  				elmCurrentRow = document.getElementById(strNewRowId);
	  				// Insert the App as Column in Current Row
	  				elmNewColumn = document.createElement("div");
	  				elmNewColumn.className = "col-md-2";
	  				elmNewColumn.innerHTML = "<a href='" + objAppsData[i].trackViewUrl + "'><img class='app_image img-rounded' src='" + objAppsData[i].artworkUrl100 + "'/><p>" + objAppsData[i].trackName + "</p></a>";
	  				elmCurrentRow.appendChild(elmNewColumn);
	  			}
	  			
	  			// Add Footer
	  			elmPageContainer.appendChild(elmFooter);
	  			
	  		}
	  	}
	  	
	  </script>
	  
	  <script src="https://itunes.apple.com/search?term=kissyface+interactive&media=software&entity=iPadSoftware&limit=100&callback=funAppsLoaded"></script>
	  
      
      
<?php include "footer.php"; ?>
