<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<style type="text/css">.cc-revoke.cc-bottom { display: none; }</style>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.addEventListener("load", function(){
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#ffffff",
                "text": "#2d2e34"
            },
            "button": {
                "background": "#8fc640",
                "text": "#ffffff"
            }
        },
        "theme": "classic",
        "position": "bottom-left",
        "type": "opt-in",
        onStatusChange: function() {
            let didConsent = this.hasConsented();
            if (didConsent) {
                dataLayer.push({'event': 'cookieConsent'});
            }
        },
        cookie: {
            name: 'cookieConsent',
            domain: ''
        },
        "content": {
            "message": "This website uses cookies to ensure you get the best experience on our website.",
            "dismiss": "Cancel",
            "allow": "Allow cookies",
            "link": "Learn more",
            "href": "https://mycardirect.co.uk/policies"
        }
    });
});
</script>