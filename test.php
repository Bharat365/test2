<!--http://leaverou.github.io/awesomplete/ -->
<link rel="stylesheet" href="awesomplete.css" />
<script src="awesomplete.min.js"></script>
<input data-list="CSS, JavaScript, HTML, SVG, ARIA, MathML" data-multiple />
<script>
new Awesomplete('input[data-multiple]', {
	filter: function(text, input) {
		return Awesomplete.FILTER_CONTAINS(text, input.match(/[^,]*$/)[0]);
	},

	item: function(text, input) {
		return Awesomplete.ITEM(text, input.match(/[^,]*$/)[0]);
	},

	replace: function(text) {
		var before = this.input.value.match(/^.+,\s*|/)[0];
		this.input.value = before + text + ", ";
	}
});
</script>