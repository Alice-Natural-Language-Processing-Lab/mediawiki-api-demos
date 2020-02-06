// This file is autogenerated. See modules.json and autogenerator.py for details

/*
	get_file_usage.js

	MediaWiki API Demos
	Demo of `Fileusage` module: Get a list of pages using a given file.

	MIT License
*/

var params = {
		action: 'query',
		titles: 'File:Example.jpg',
		prop: 'fileusage',
		format: 'json'
	},
	api = new mw.Api();

api.get( params ).done( function ( data ) {
	console.log( data );
} );
