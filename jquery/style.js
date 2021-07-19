jQuery( function( $ ) {
	$( ".is-hamburger" ).on( "click", function() {
		$( this ).toggleClass( "is-open" );
		let flg = $( this ).hasClass( "is-open" );
		if( flg ) {
			$( ".st1" ).attr( menuOpen().st1 );
			$( ".st3" ).attr( menuOpen().st3 );
		} else {
			$( ".st1" ).attr( menuClose().st1 );
			$( ".st3" ).attr( menuClose().st3 );
		}
		$( ".l-aside" ).toggleClass( "is-open" );
	} );
} );

function menuOpen() {
	let data = {
		st1: {
			"x": 10,
			"y": 20,
			"transform": "matrix(0.7071 0.7071 -0.7071 1.05 20.9943 -15.4126)"
		},
		st3: {
			"x": 10,
			"y": 30,
			"transform": "matrix(0.7071 -0.7071 0.7071 0.7071 -15.4264 20)"
		}
	};
	return data;
}
function menuClose() {
	let data = {
		st1: {
			"x": 10,
			"y": 10,
			"transform": "matrix( 1 0 0 1 0 0 )"
		},
		st3: {
			"x": 10,
			"y": 30,
			"transform": "matrix( 1 0 0 1 0 0 )"
		}	
	};
	return data;
}