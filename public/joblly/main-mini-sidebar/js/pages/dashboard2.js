//[Dashboard Javascript]

//Project:	Joblly - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	var options = {
	  chart: {
		height: 160,
		width: 160,
		type: "radialBar"
	  },

	  series: [50],
		colors: ['#3da643'],
	  plotOptions: {
		radialBar: {
		  hollow: {
			margin: 0,
			size: "60%"
		  },
		  track: {
			background: '#e9f5ea',
		  },

		  dataLabels: {
			showOn: "always",
			name: {
			  show: false,
			},
			value: {
			  offsetY: 5,
			  color: "#111",
			  fontSize: "20px",
			  show: true
			}
		  }
		}
	  },

	  stroke: {
		lineCap: "round",
	  },
	  labels: ["Progress"]
	};

	var chart = new ApexCharts(document.querySelector("#revenue2"), options);

	chart.render();
	
	
	
	
	
}); // End of use strict
