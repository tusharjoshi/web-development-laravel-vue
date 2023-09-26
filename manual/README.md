# Web Development using Laravel and Vue Manual

The concepts discussed in sessions as well as example source code details.

## How To Generate the Manual - Building with podman container

### Pull the image for use

```bash
podman pull --platform linux/arm64 docker.io/uwebarthel/docker-asciidoctor # Apple M1 arm64
podman pull docker.io/asciidoctor/docker-asciidoctor
```

### Start the container

```bash
podman run -it -v $(pwd):/documents/ docker.io/uwebarthel/docker-asciidoctor # Apple M1 arm64
podman run -it -v $(pwd):/documents/ docker.io/asciidoctor/docker-asciidoctor
```

### Use the following commands to generate books in the container

```bash
asciidoctor-pdf -r asciidoctor-diagram -a index -D ./build book/web-development-laravel-vue.adoc 
asciidoctor-pdf -r asciidoctor-diagram -a index -D ./build book/web-development-laravel-vue.adoc 
asciidoctor -r asciidoctor-diagram -D ./build -a data-uri book/web-development-laravel-vue.adoc 
```
