# WordPress and Fast Comments Plugin

A WordPress plugin to replace native WordPress comments with Fast Comments - for static and headless WP sites.

![Screenshot of Fast Comments Comments on a WordPress site](https://tmp.f8.n0.cdn.getcloudapp.com/items/xQugWY0l/Screen+Shot+2020-02-27+at+3.25.42+AM.png?v=20c5dd9a92deb31a15c165b5e3883069 "Fast Comments on WordPress site")

## Setup

1. Setup an account with [https://fastcomments.com//](https://fastcomments.com//)
2. Get your `tenantId` from the embed script under "My Account" (looks like `Dst8m-tt_`)
3. Install this plugin in WordPress
4. Add your Tenant ID to the Fast Comments setting page in the WordPress admin under Settings > Fast Comments
5. Optionally import your WordPress comments into Fast Comments (see instructions below)

### How to Import WordPress Comments into Fast Comments

At the moment this process requires importing your WordPress comments into Disqus and then importing the comments from Disqus into Fast Comments.

1. Sign up for [Disqus](https://disqus.com/) (with a free plan)
2. Setup your site in Disqus, choosing WordPress as your platform
3. Install the [Disqus WordPress Plugin](https://wordpress.org/plugins/disqus-comment-system/)
4. Setup the Disqus WP Plugin
5. Copy the sync token from WordPress plugin to Disqus setup page
6. Complete the setup in Disqus dashboard
7. Go back to the Disqus plugin in WordPress (may need to refresh the settings page) and on "Syncing" tab. Click to "Import Comments"
8. In Disqus dashboard, "Export Comments"
9. Get the URL from Disqus email and download the export file
10. In the Fast Comments settings for your site, navigate to "Import/Export," select "Disqus" from the dropdown, upload your comments from Disqus, click "Start Import"
