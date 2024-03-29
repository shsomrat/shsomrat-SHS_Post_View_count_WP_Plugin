# S H Somrat's Post View Count Plugin

Enhance user engagement by displaying the view count of each post.

## Installation

1. Download the plugin ZIP file from the [GitHub repository](https://github.com/yourusername/shs-post-view-count).
2. Log in to your WordPress admin dashboard.
3. Navigate to **Plugins > Add New**.
4. Click on the **Upload Plugin** button, then choose the downloaded ZIP file.
5. Click on **Install Now** and then **Activate** the plugin.

## Usage

Once the plugin is activated, it will automatically start tracking the view count for each post. You can use the provided shortcode to display the view count in your posts or pages.

### Shortcode

Use the `[post_view_count]` shortcode to display the view count for a specific post. By default, it will display the view count for the current post.

Example:```[post_view_count]```


You can also specify a post ID using the `post_id` attribute to display the view count for a specific post.

Example:
```[post_view_count post_id="123"]```


### Custom Column

The plugin adds a custom column in the WordPress admin dashboard to display the view count for each post in the post list table.

### Styling

You can customize the appearance of the view count display by modifying the CSS file located at `assets/css/style.css`.