# Phpillip Standard Edition

> Have you met [Phpillip](https://github.com/Tom32i/phpillip)?

## Bootstrap

To bootstrap a new [Phpillip](https://github.com/Tom32i/phpillip) project:

    composer create-project tom32i/phpillip-standard my_static_website

## Directory structure:

```
# Sources directory
src/
    # Your Silex Application in which your declare routes, services, ...
    Application.php

    # Your controller classes (optional)
    /Controller
        MyController.php

    # Resources
    /Resources

        # Configuration directory
        config/
            # Phpillip configuration
            config.yml

        # Content directory
        data/
            # Create a directory for each content type
            post/
                # Your 'post' contents goes here
                my-first-post.md
                a-post-in-json.json

        # Public directory
        public/
            # ALl public directory content will be exposed in 'dist'
            css/
                style.css

        # Views directory
        views/
            # Your twig templates
            base.html.twig
            blog/
                index.html.twig
                post.html.twig

# Destination directory
dist/
    # The static files will be dumped in here

```
