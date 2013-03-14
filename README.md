# Upstairs Garden
A WordPress Theme Based on Bones.

## Compiling SASS Assets
Style assets are written in SASS and require the `compass` and `bootstrap-sass`
libraries.  Execute the following command from the `library/css/` folder to
start SASS compilation.  Once running, SASS will watch for changes to the
source file.
	sass --compass --watch -r compass -r bootstrap-sass style.sass
