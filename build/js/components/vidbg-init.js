jQuery(document).ready(function($) {
    $('.s-video-v2__bg').each(function() {
        var $this = $(this);
        var bgData = $this.attr('data-vidbg-bg');
        var optionsData = $this.attr('data-vidbg-options');
        
        if (bgData) {
            // Parse the data-vidbg-bg attribute
            var mp4 = '';
            var webm = '';
            var poster = '';
            
            // Split by comma and parse each part
            var bgParts = bgData.split(',');
            for (var i = 0; i < bgParts.length; i++) {
                var part = bgParts[i].trim();
                if (part.indexOf('mp4:') === 0) {
                    mp4 = part.substring(4).trim();
                } else if (part.indexOf('webm:') === 0) {
                    webm = part.substring(5).trim();
                } else if (part.indexOf('poster:') === 0) {
                    poster = part.substring(7).trim();
                }
            }
            
            // Parse the data-vidbg-options attribute
            var loop = true;
            var overlay = false;
            
            if (optionsData) {
                if (optionsData.indexOf('loop: false') !== -1) loop = false;
                if (optionsData.indexOf('overlay: true') !== -1) overlay = true;
            }
            
            // Initialize vidbg with parsed options
            $this.vidbg({
                mp4: mp4,
                webm: webm,
                poster: poster,
                repeat: loop,
                overlay: overlay
            });
        } else {
            // Fallback to default initialization
            $this.vidbg();
        }
    });
});
//# sourceMappingURL=../maps/components/vidbg-init.js.map
