//[Dashboard Javascript]

//Project:	Joblly - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	  	
	var options = {
	  chart: {
		height: 150,
		width: 150,
		type: "radialBar"
	  },

	  series: [60],
		colors: ['#673ab7'],
	  plotOptions: {
		radialBar: {
		  hollow: {
			margin: 0,
			size: "60%"
		  },
		  track: {
			background: '#e7daff',
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

	var chart = new ApexCharts(document.querySelector("#revenue1"), options);

	chart.render();
	
	var options = {
	  chart: {
		height: 150,
		width: 150,
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
	
	var options = {
	  chart: {
		height: 150,
		width: 150,
		type: "radialBar"
	  },

	  series: [34],
		colors: ['#fdac42'],
	  plotOptions: {
		radialBar: {
		  hollow: {
			margin: 0,
			size: "60%"
		  },
		  track: {
			background: '#fde5ba',
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

	var chart = new ApexCharts(document.querySelector("#revenue3"), options);

	chart.render();
	
	
	
	var options = {
	  series: [
		  {
			name: "Applications",
			data: [15, 22, 35, 49, 50, 12, 28, 20, 33, 39, 85, 98]
		  },
		  {
			name: "Shortlisted",
			data: [5, 15, 25, 30, 25, 8, 18, 21, 32, 39, 62, 72]
		  },
	  ],
	  chart: {
	  height: 355,
	  type: 'bar',
	  zoom: {
		enabled: false
	  },			  
	  toolbar: {
		show: false,
	  },
	},
	dataLabels: {
	  enabled: false
	},
	colors: ['#673ab7', '#3da643'],
	grid: {			
		show: true,
	},
		
	  plotOptions: {
		  bar: {
			horizontal: false,
			columnWidth: '40%',
			endingShape: 'rounded'
		  },
	  },

	 legend: {
		show: true,
		 position: 'top',
      	horizontalAlign: 'left', 
	 },
	xaxis: {
	  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		labels: {
			show: true,
		},
		axisBorder: {
			show: true,
		},
		axisTicks: {
			show: true,
		},
		},

	yaxis: {
	  labels: {
			show: true,
		}
	},
	};

	var chart = new ApexCharts(document.querySelector("#active_jobs"), options);
	chart.render();
	
	
}); // End of use strict
