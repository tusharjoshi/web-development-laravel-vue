# Web Development using Laravel and Vue Manual

The concepts discussed in sessions as well as example source code details.

## How To Generate the Manual - Building with podman container

### Podman

Ensure [Podman](https://podman.io/) is installed and the following command works

```bash
podman --version
```

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

In the shell which is available after the container starts

```bash
cd manual
./makebook
```
