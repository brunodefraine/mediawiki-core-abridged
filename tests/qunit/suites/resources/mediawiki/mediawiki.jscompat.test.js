/* Some misc JavaScript compatibility tests, just to make sure the environments we run in are consistent */

module( 'mediawiki.jscompat', QUnit.newMwEnvironment() );

test( 'Variable with Unicode letter in name', function() {
	expect(3);
	var orig = "some token";
	var ŝablono = orig;
	deepEqual( ŝablono, orig, 'ŝablono' );
	deepEqual( \u015dablono, orig, '\\u015dablono' );
	deepEqual( \u015Dablono, orig, '\\u015Dablono' );
});

/*
// Not that we need this. ;)
// This fails on IE 6-8
// Works on IE 9, Firefox 6, Chrome 14
test( 'Keyword workaround: "if" as variable name using Unicode escapes', function() {
	var orig = "another token";
	\u0069\u0066 = orig;
	deepEqual( \u0069\u0066, orig, '\\u0069\\u0066' );
});
*/

/*
// Not that we need this. ;)
// This fails on IE 6-9
// Works on Firefox 6, Chrome 14
test( 'Keyword workaround: "if" as member variable name using Unicode escapes', function() {
	var orig = "another token";
	var foo = {};
	foo.\u0069\u0066 = orig;
	deepEqual( foo.\u0069\u0066, orig, 'foo.\\u0069\\u0066' );
});
*/

test( 'Stripping of single initial newline from textarea\'s literal contents (bug 12130)', function() {
	var maxn = 4;
	expect(maxn * 2);

	var repeat = function(str, n) {
		if (n <= 0) {
			return '';
		} else {
			var out = Array(n);
			for (var i = 0; i < n; i++) {
				out[i] = str;
			}
			return out.join('');
		}
	};

	for (var n = 0; n < maxn; n++) {
		var expected = repeat('\n', n) + 'some text';

		var $textarea = $('<textarea>\n' + expected + '</textarea>');
		equal($textarea.val(), expected, 'Expecting ' + n + ' newlines (HTML contained ' + (n + 1) + ')');

		var $textarea2 = $('<textarea>').val(expected);
		equal($textarea2.val(), expected, 'Expecting ' + n + ' newlines (from DOM set with ' + n + ')');
	}
});
