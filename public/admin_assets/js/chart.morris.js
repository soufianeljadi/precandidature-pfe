// $(function(){

// 	/* Morris Area Chart */

// 	window.mA = Morris.Area({
// 	    element: 'nbrCandidaturesParRegion',
// 	    data: [
// 	        { label: 'a', a: 225},
// 	        { label: 'b', a: 150},
// 	        { label: 'c', a: 0},
// 	        { label: 'd', a: 240},
// 	        { label: 'e', a: 120},
// 	        { label: 'f', a: 80},
// 	        { label: 'g', a: 100},
// 	        { label: 'h', a: 300},
// 	    ],
// 	    xkey: 'label',
// 	    ykeys: ['a'],
// 	    labels: ['Nombre des candidatures'],
// 	    lineColors: ['#1b5a90'],
// 	    lineWidth: 2,
//       parseTime : false,
//      	fillOpacity: 0.5,
// 	    gridTextSize: 10,
// 	    hideHover: 'auto',
// 	    resize: true,
// 		redraw: true
// 	});






// 	/* Morris Line Chart */

// 	window.mL = Morris.Line({
// 	    element: 'morrisLine',
// 	    data: [
// 	        { y: '2015', a: 100, b: 30},
// 	        { y: '2016', a: 20,  b: 60},
// 	        { y: '2017', a: 90,  b: 120},
// 	        { y: '2018', a: 50,  b: 80},
// 	        { y: '2019', a: 120,  b: 150},
// 	    ],
// 	    xkey: 'y',
// 	    ykeys: ['a', 'b'],
// 	    labels: ['Mentors', 'Mentees'],
// 	    lineColors: ['#1b5a90','#ff9d00'],
// 	    lineWidth: 1,
// 	    gridTextSize: 10,
// 	    hideHover: 'auto',
// 	    resize: true,
// 		redraw: true
// 	});
// 	$(window).on("resize", function(){
// 		mA.redraw();
// 		mL.redraw();
// 	});

// });
