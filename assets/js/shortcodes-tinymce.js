(function() {

  //Icons
  var ctscGeneratorGeneralIcons = [
    { text: '(none)', value: '' },
    { text: 'adjust', value: 'adjust' },
    { text: 'adn', value: 'adn' },
    { text: 'align-center', value: 'align-center' },
    { text: 'align-justify', value: 'align-justify' },
    { text: 'align-left', value: 'align-left' },
    { text: 'align-right', value: 'align-right' },
    { text: 'ambulance', value: 'ambulance' },
    { text: 'anchor', value: 'anchor' },
    { text: 'android', value: 'android' },
    { text: 'angellist', value: 'angellist' },
    { text: 'angle-double-down', value: 'angle-double-down' },
    { text: 'angle-double-left', value: 'angle-double-left' },
    { text: 'angle-double-right', value: 'angle-double-right' },
    { text: 'angle-double-up', value: 'angle-double-up' },
    { text: 'angle-down', value: 'angle-down' },
    { text: 'angle-left', value: 'angle-left' },
    { text: 'angle-right', value: 'angle-right' },
    { text: 'angle-up', value: 'angle-up' },
    { text: 'apple', value: 'apple' },
    { text: 'archive', value: 'archive' },
    { text: 'area-chart', value: 'area-chart' },
    { text: 'arrow-circle-down', value: 'arrow-circle-down' },
    { text: 'arrow-circle-left', value: 'arrow-circle-left' },
    { text: 'arrow-circle-o-down', value: 'arrow-circle-o-down' },
    { text: 'arrow-circle-o-left', value: 'arrow-circle-o-left' },
    { text: 'arrow-circle-o-right', value: 'arrow-circle-o-right' },
    { text: 'arrow-circle-o-up', value: 'arrow-circle-o-up' },
    { text: 'arrow-circle-right', value: 'arrow-circle-right' },
    { text: 'arrow-circle-up', value: 'arrow-circle-up' },
    { text: 'arrow-down', value: 'arrow-down' },
    { text: 'arrow-left', value: 'arrow-left' },
    { text: 'arrow-right', value: 'arrow-right' },
    { text: 'arrows', value: 'arrows' },
    { text: 'arrows-alt', value: 'arrows-alt' },
    { text: 'arrows-h', value: 'arrows-h' },
    { text: 'arrows-v', value: 'arrows-v' },
    { text: 'arrow-up', value: 'arrow-up' },
    { text: 'asterisk', value: 'asterisk' },
    { text: 'at', value: 'at' },
    { text: 'automobile', value: 'automobile' },
    { text: 'backward', value: 'backward' },
    { text: 'ban', value: 'ban' },
    { text: 'bank', value: 'bank' },
    { text: 'bar-chart', value: 'bar-chart' },
    { text: 'bar-chart-o', value: 'bar-chart-o' },
    { text: 'barcode', value: 'barcode' },
    { text: 'bars', value: 'bars' },
    { text: 'beer', value: 'beer' },
    { text: 'behance', value: 'behance' },
    { text: 'behance-square', value: 'behance-square' },
    { text: 'bell', value: 'bell' },
    { text: 'bell-o', value: 'bell-o' },
    { text: 'bell-slash', value: 'bell-slash' },
    { text: 'bell-slash-o', value: 'bell-slash-o' },
    { text: 'bicycle', value: 'bicycle' },
    { text: 'binoculars', value: 'binoculars' },
    { text: 'birthday-cake', value: 'birthday-cake' },
    { text: 'bitbucket', value: 'bitbucket' },
    { text: 'bitbucket-square', value: 'bitbucket-square' },
    { text: 'bitcoin', value: 'bitcoin' },
    { text: 'bold', value: 'bold' },
    { text: 'bolt', value: 'bolt' },
    { text: 'bomb', value: 'bomb' },
    { text: 'book', value: 'book' },
    { text: 'bookmark', value: 'bookmark' },
    { text: 'bookmark-o', value: 'bookmark-o' },
    { text: 'briefcase', value: 'briefcase' },
    { text: 'btc', value: 'btc' },
    { text: 'bug', value: 'bug' },
    { text: 'building', value: 'building' },
    { text: 'building-o', value: 'building-o' },
    { text: 'bullhorn', value: 'bullhorn' },
    { text: 'bullseye', value: 'bullseye' },
    { text: 'bus', value: 'bus' },
    { text: 'cab', value: 'cab' },
    { text: 'calculator', value: 'calculator' },
    { text: 'calendar', value: 'calendar' },
    { text: 'calendar-o', value: 'calendar-o' },
    { text: 'camera', value: 'camera' },
    { text: 'camera-retro', value: 'camera-retro' },
    { text: 'car', value: 'car' },
    { text: 'caret-down', value: 'caret-down' },
    { text: 'caret-left', value: 'caret-left' },
    { text: 'caret-right', value: 'caret-right' },
    { text: 'caret-square-o-down', value: 'caret-square-o-down' },
    { text: 'caret-square-o-left', value: 'caret-square-o-left' },
    { text: 'caret-square-o-right', value: 'caret-square-o-right' },
    { text: 'caret-square-o-up', value: 'caret-square-o-up' },
    { text: 'caret-up', value: 'caret-up' },
    { text: 'cc', value: 'cc' },
    { text: 'cc-amex', value: 'cc-amex' },
    { text: 'cc-discover', value: 'cc-discover' },
    { text: 'cc-mastercard', value: 'cc-mastercard' },
    { text: 'cc-paypal', value: 'cc-paypal' },
    { text: 'cc-stripe', value: 'cc-stripe' },
    { text: 'cc-visa', value: 'cc-visa' },
    { text: 'certificate', value: 'certificate' },
    { text: 'chain', value: 'chain' },
    { text: 'chain-broken', value: 'chain-broken' },
    { text: 'check', value: 'check' },
    { text: 'check-circle', value: 'check-circle' },
    { text: 'check-circle-o', value: 'check-circle-o' },
    { text: 'check-square', value: 'check-square' },
    { text: 'check-square-o', value: 'check-square-o' },
    { text: 'chevron-circle-down', value: 'chevron-circle-down' },
    { text: 'chevron-circle-left', value: 'chevron-circle-left' },
    { text: 'chevron-circle-right', value: 'chevron-circle-right' },
    { text: 'chevron-circle-up', value: 'chevron-circle-up' },
    { text: 'chevron-down', value: 'chevron-down' },
    { text: 'chevron-left', value: 'chevron-left' },
    { text: 'chevron-right', value: 'chevron-right' },
    { text: 'chevron-up', value: 'chevron-up' },
    { text: 'child', value: 'child' },
    { text: 'circle', value: 'circle' },
    { text: 'circle-o', value: 'circle-o' },
    { text: 'circle-o-notch', value: 'circle-o-notch' },
    { text: 'circle-thin', value: 'circle-thin' },
    { text: 'clipboard', value: 'clipboard' },
    { text: 'clock-o', value: 'clock-o' },
    { text: 'close', value: 'close' },
    { text: 'cloud', value: 'cloud' },
    { text: 'cloud-download', value: 'cloud-download' },
    { text: 'cloud-upload', value: 'cloud-upload' },
    { text: 'cny', value: 'cny' },
    { text: 'code', value: 'code' },
    { text: 'code-fork', value: 'code-fork' },
    { text: 'codepen', value: 'codepen' },
    { text: 'coffee', value: 'coffee' },
    { text: 'cog', value: 'cog' },
    { text: 'cogs', value: 'cogs' },
    { text: 'columns', value: 'columns' },
    { text: 'comment', value: 'comment' },
    { text: 'comment-o', value: 'comment-o' },
    { text: 'comments', value: 'comments' },
    { text: 'comments-o', value: 'comments-o' },
    { text: 'compass', value: 'compass' },
    { text: 'compress', value: 'compress' },
    { text: 'copy', value: 'copy' },
    { text: 'copyright', value: 'copyright' },
    { text: 'credit-card', value: 'credit-card' },
    { text: 'crop', value: 'crop' },
    { text: 'crosshairs', value: 'crosshairs' },
    { text: 'css3', value: 'css3' },
    { text: 'cube', value: 'cube' },
    { text: 'cubes', value: 'cubes' },
    { text: 'cut', value: 'cut' },
    { text: 'cutlery', value: 'cutlery' },
    { text: 'dashboard', value: 'dashboard' },
    { text: 'database', value: 'database' },
    { text: 'dedent', value: 'dedent' },
    { text: 'delicious', value: 'delicious' },
    { text: 'desktop', value: 'desktop' },
    { text: 'deviantart', value: 'deviantart' },
    { text: 'digg', value: 'digg' },
    { text: 'dollar', value: 'dollar' },
    { text: 'dot-circle-o', value: 'dot-circle-o' },
    { text: 'download', value: 'download' },
    { text: 'dribbble', value: 'dribbble' },
    { text: 'dropbox', value: 'dropbox' },
    { text: 'drupal', value: 'drupal' },
    { text: 'edit', value: 'edit' },
    { text: 'eject', value: 'eject' },
    { text: 'ellipsis-h', value: 'ellipsis-h' },
    { text: 'ellipsis-v', value: 'ellipsis-v' },
    { text: 'empire', value: 'empire' },
    { text: 'envelope', value: 'envelope' },
    { text: 'envelope-o', value: 'envelope-o' },
    { text: 'envelope-square', value: 'envelope-square' },
    { text: 'eraser', value: 'eraser' },
    { text: 'eur', value: 'eur' },
    { text: 'euro', value: 'euro' },
    { text: 'exchange', value: 'exchange' },
    { text: 'exclamation', value: 'exclamation' },
    { text: 'exclamation-circle', value: 'exclamation-circle' },
    { text: 'exclamation-triangle', value: 'exclamation-triangle' },
    { text: 'expand', value: 'expand' },
    { text: 'external-link', value: 'external-link' },
    { text: 'external-link-square', value: 'external-link-square' },
    { text: 'eye', value: 'eye' },
    { text: 'eyedropper', value: 'eyedropper' },
    { text: 'eye-slash', value: 'eye-slash' },
    { text: 'facebook', value: 'facebook' },
    { text: 'facebook-square', value: 'facebook-square' },
    { text: 'fast-backward', value: 'fast-backward' },
    { text: 'fast-forward', value: 'fast-forward' },
    { text: 'fax', value: 'fax' },
    { text: 'female', value: 'female' },
    { text: 'fighter-jet', value: 'fighter-jet' },
    { text: 'file', value: 'file' },
    { text: 'file-archive-o', value: 'file-archive-o' },
    { text: 'file-audio-o', value: 'file-audio-o' },
    { text: 'file-code-o', value: 'file-code-o' },
    { text: 'file-excel-o', value: 'file-excel-o' },
    { text: 'file-image-o', value: 'file-image-o' },
    { text: 'file-movie-o', value: 'file-movie-o' },
    { text: 'file-o', value: 'file-o' },
    { text: 'file-pdf-o', value: 'file-pdf-o' },
    { text: 'file-photo-o', value: 'file-photo-o' },
    { text: 'file-picture-o', value: 'file-picture-o' },
    { text: 'file-powerpoint-o', value: 'file-powerpoint-o' },
    { text: 'files-o', value: 'files-o' },
    { text: 'file-sound-o', value: 'file-sound-o' },
    { text: 'file-text', value: 'file-text' },
    { text: 'file-text-o', value: 'file-text-o' },
    { text: 'file-video-o', value: 'file-video-o' },
    { text: 'file-word-o', value: 'file-word-o' },
    { text: 'file-zip-o', value: 'file-zip-o' },
    { text: 'film', value: 'film' },
    { text: 'filter', value: 'filter' },
    { text: 'fire', value: 'fire' },
    { text: 'fire-extinguisher', value: 'fire-extinguisher' },
    { text: 'flag', value: 'flag' },
    { text: 'flag-checkered', value: 'flag-checkered' },
    { text: 'flag-o', value: 'flag-o' },
    { text: 'flash', value: 'flash' },
    { text: 'flask', value: 'flask' },
    { text: 'flickr', value: 'flickr' },
    { text: 'floppy-o', value: 'floppy-o' },
    { text: 'folder', value: 'folder' },
    { text: 'folder-o', value: 'folder-o' },
    { text: 'folder-open', value: 'folder-open' },
    { text: 'folder-open-o', value: 'folder-open-o' },
    { text: 'font', value: 'font' },
    { text: 'forward', value: 'forward' },
    { text: 'foursquare', value: 'foursquare' },
    { text: 'frown-o', value: 'frown-o' },
    { text: 'futbol-o', value: 'futbol-o' },
    { text: 'gamepad', value: 'gamepad' },
    { text: 'gavel', value: 'gavel' },
    { text: 'gbp', value: 'gbp' },
    { text: 'ge', value: 'ge' },
    { text: 'gear', value: 'gear' },
    { text: 'gears', value: 'gears' },
    { text: 'gift', value: 'gift' },
    { text: 'git', value: 'git' },
    { text: 'github', value: 'github' },
    { text: 'github-alt', value: 'github-alt' },
    { text: 'github-square', value: 'github-square' },
    { text: 'git-square', value: 'git-square' },
    { text: 'gittip', value: 'gittip' },
    { text: 'glass', value: 'glass' },
    { text: 'globe', value: 'globe' },
    { text: 'google', value: 'google' },
    { text: 'google-plus', value: 'google-plus' },
    { text: 'google-plus-square', value: 'google-plus-square' },
    { text: 'google-wallet', value: 'google-wallet' },
    { text: 'graduation-cap', value: 'graduation-cap' },
    { text: 'group', value: 'group' },
    { text: 'hacker-news', value: 'hacker-news' },
    { text: 'hand-o-down', value: 'hand-o-down' },
    { text: 'hand-o-left', value: 'hand-o-left' },
    { text: 'hand-o-right', value: 'hand-o-right' },
    { text: 'hand-o-up', value: 'hand-o-up' },
    { text: 'hdd-o', value: 'hdd-o' },
    { text: 'header', value: 'header' },
    { text: 'headphones', value: 'headphones' },
    { text: 'heart', value: 'heart' },
    { text: 'heart-o', value: 'heart-o' },
    { text: 'history', value: 'history' },
    { text: 'home', value: 'home' },
    { text: 'hospital-o', value: 'hospital-o' },
    { text: 'h-square', value: 'h-square' },
    { text: 'html5', value: 'html5' },
    { text: 'ils', value: 'ils' },
    { text: 'image', value: 'image' },
    { text: 'inbox', value: 'inbox' },
    { text: 'indent', value: 'indent' },
    { text: 'info', value: 'info' },
    { text: 'info-circle', value: 'info-circle' },
    { text: 'inr', value: 'inr' },
    { text: 'instagram', value: 'instagram' },
    { text: 'institution', value: 'institution' },
    { text: 'ioxhost', value: 'ioxhost' },
    { text: 'italic', value: 'italic' },
    { text: 'joomla', value: 'joomla' },
    { text: 'jpy', value: 'jpy' },
    { text: 'jsfiddle', value: 'jsfiddle' },
    { text: 'key', value: 'key' },
    { text: 'keyboard-o', value: 'keyboard-o' },
    { text: 'krw', value: 'krw' },
    { text: 'language', value: 'language' },
    { text: 'laptop', value: 'laptop' },
    { text: 'lastfm', value: 'lastfm' },
    { text: 'lastfm-square', value: 'lastfm-square' },
    { text: 'leaf', value: 'leaf' },
    { text: 'legal', value: 'legal' },
    { text: 'lemon-o', value: 'lemon-o' },
    { text: 'level-down', value: 'level-down' },
    { text: 'level-up', value: 'level-up' },
    { text: 'life-bouy', value: 'life-bouy' },
    { text: 'life-buoy', value: 'life-buoy' },
    { text: 'life-ring', value: 'life-ring' },
    { text: 'life-saver', value: 'life-saver' },
    { text: 'lightbulb-o', value: 'lightbulb-o' },
    { text: 'line-chart', value: 'line-chart' },
    { text: 'link', value: 'link' },
    { text: 'linkedin', value: 'linkedin' },
    { text: 'linkedin-square', value: 'linkedin-square' },
    { text: 'linux', value: 'linux' },
    { text: 'list', value: 'list' },
    { text: 'list-alt', value: 'list-alt' },
    { text: 'list-ol', value: 'list-ol' },
    { text: 'list-ul', value: 'list-ul' },
    { text: 'location-arrow', value: 'location-arrow' },
    { text: 'lock', value: 'lock' },
    { text: 'long-arrow-down', value: 'long-arrow-down' },
    { text: 'long-arrow-left', value: 'long-arrow-left' },
    { text: 'long-arrow-right', value: 'long-arrow-right' },
    { text: 'long-arrow-up', value: 'long-arrow-up' },
    { text: 'magic', value: 'magic' },
    { text: 'magnet', value: 'magnet' },
    { text: 'mail-forward', value: 'mail-forward' },
    { text: 'mail-reply', value: 'mail-reply' },
    { text: 'mail-reply-all', value: 'mail-reply-all' },
    { text: 'male', value: 'male' },
    { text: 'map-marker', value: 'map-marker' },
    { text: 'maxcdn', value: 'maxcdn' },
    { text: 'meanpath', value: 'meanpath' },
    { text: 'medkit', value: 'medkit' },
    { text: 'meh-o', value: 'meh-o' },
    { text: 'microphone', value: 'microphone' },
    { text: 'microphone-slash', value: 'microphone-slash' },
    { text: 'minus', value: 'minus' },
    { text: 'minus-circle', value: 'minus-circle' },
    { text: 'minus-square', value: 'minus-square' },
    { text: 'minus-square-o', value: 'minus-square-o' },
    { text: 'mobile', value: 'mobile' },
    { text: 'mobile-phone', value: 'mobile-phone' },
    { text: 'money', value: 'money' },
    { text: 'moon-o', value: 'moon-o' },
    { text: 'mortar-board', value: 'mortar-board' },
    { text: 'music', value: 'music' },
    { text: 'navicon', value: 'navicon' },
    { text: 'newspaper-o', value: 'newspaper-o' },
    { text: 'openid', value: 'openid' },
    { text: 'outdent', value: 'outdent' },
    { text: 'pagelines', value: 'pagelines' },
    { text: 'paint-brush', value: 'paint-brush' },
    { text: 'paperclip', value: 'paperclip' },
    { text: 'paper-plane', value: 'paper-plane' },
    { text: 'paper-plane-o', value: 'paper-plane-o' },
    { text: 'paragraph', value: 'paragraph' },
    { text: 'paste', value: 'paste' },
    { text: 'pause', value: 'pause' },
    { text: 'paw', value: 'paw' },
    { text: 'paypal', value: 'paypal' },
    { text: 'pencil', value: 'pencil' },
    { text: 'pencil-square', value: 'pencil-square' },
    { text: 'pencil-square-o', value: 'pencil-square-o' },
    { text: 'phone', value: 'phone' },
    { text: 'phone-square', value: 'phone-square' },
    { text: 'photo', value: 'photo' },
    { text: 'picture-o', value: 'picture-o' },
    { text: 'pie-chart', value: 'pie-chart' },
    { text: 'pied-piper', value: 'pied-piper' },
    { text: 'pied-piper-alt', value: 'pied-piper-alt' },
    { text: 'pinterest', value: 'pinterest' },
    { text: 'pinterest-square', value: 'pinterest-square' },
    { text: 'plane', value: 'plane' },
    { text: 'play', value: 'play' },
    { text: 'play-circle', value: 'play-circle' },
    { text: 'play-circle-o', value: 'play-circle-o' },
    { text: 'plug', value: 'plug' },
    { text: 'plus', value: 'plus' },
    { text: 'plus-circle', value: 'plus-circle' },
    { text: 'plus-square', value: 'plus-square' },
    { text: 'plus-square-o', value: 'plus-square-o' },
    { text: 'power-off', value: 'power-off' },
    { text: 'print', value: 'print' },
    { text: 'puzzle-piece', value: 'puzzle-piece' },
    { text: 'qq', value: 'qq' },
    { text: 'qrcode', value: 'qrcode' },
    { text: 'question', value: 'question' },
    { text: 'question-circle', value: 'question-circle' },
    { text: 'quote-left', value: 'quote-left' },
    { text: 'quote-right', value: 'quote-right' },
    { text: 'ra', value: 'ra' },
    { text: 'random', value: 'random' },
    { text: 'rebel', value: 'rebel' },
    { text: 'recycle', value: 'recycle' },
    { text: 'reddit', value: 'reddit' },
    { text: 'reddit-square', value: 'reddit-square' },
    { text: 'refresh', value: 'refresh' },
    { text: 'remove', value: 'remove' },
    { text: 'renren', value: 'renren' },
    { text: 'reorder', value: 'reorder' },
    { text: 'repeat', value: 'repeat' },
    { text: 'reply', value: 'reply' },
    { text: 'reply-all', value: 'reply-all' },
    { text: 'retweet', value: 'retweet' },
    { text: 'rmb', value: 'rmb' },
    { text: 'road', value: 'road' },
    { text: 'rocket', value: 'rocket' },
    { text: 'rotate-left', value: 'rotate-left' },
    { text: 'rotate-right', value: 'rotate-right' },
    { text: 'rouble', value: 'rouble' },
    { text: 'rss', value: 'rss' },
    { text: 'rss-square', value: 'rss-square' },
    { text: 'rub', value: 'rub' },
    { text: 'ruble', value: 'ruble' },
    { text: 'rupee', value: 'rupee' },
    { text: 'save', value: 'save' },
    { text: 'scissors', value: 'scissors' },
    { text: 'search', value: 'search' },
    { text: 'search-minus', value: 'search-minus' },
    { text: 'search-plus', value: 'search-plus' },
    { text: 'send', value: 'send' },
    { text: 'send-o', value: 'send-o' },
    { text: 'share', value: 'share' },
    { text: 'share-alt', value: 'share-alt' },
    { text: 'share-alt-square', value: 'share-alt-square' },
    { text: 'share-square', value: 'share-square' },
    { text: 'share-square-o', value: 'share-square-o' },
    { text: 'shekel', value: 'shekel' },
    { text: 'sheqel', value: 'sheqel' },
    { text: 'shield', value: 'shield' },
    { text: 'shopping-cart', value: 'shopping-cart' },
    { text: 'signal', value: 'signal' },
    { text: 'sign-in', value: 'sign-in' },
    { text: 'sign-out', value: 'sign-out' },
    { text: 'sitemap', value: 'sitemap' },
    { text: 'skype', value: 'skype' },
    { text: 'slack', value: 'slack' },
    { text: 'sliders', value: 'sliders' },
    { text: 'slideshare', value: 'slideshare' },
    { text: 'smile-o', value: 'smile-o' },
    { text: 'soccer-ball-o', value: 'soccer-ball-o' },
    { text: 'sort', value: 'sort' },
    { text: 'sort-alpha-asc', value: 'sort-alpha-asc' },
    { text: 'sort-alpha-desc', value: 'sort-alpha-desc' },
    { text: 'sort-amount-asc', value: 'sort-amount-asc' },
    { text: 'sort-amount-desc', value: 'sort-amount-desc' },
    { text: 'sort-asc', value: 'sort-asc' },
    { text: 'sort-desc', value: 'sort-desc' },
    { text: 'sort-down', value: 'sort-down' },
    { text: 'sort-numeric-asc', value: 'sort-numeric-asc' },
    { text: 'sort-numeric-desc', value: 'sort-numeric-desc' },
    { text: 'sort-up', value: 'sort-up' },
    { text: 'soundcloud', value: 'soundcloud' },
    { text: 'space-shuttle', value: 'space-shuttle' },
    { text: 'spinner', value: 'spinner' },
    { text: 'spoon', value: 'spoon' },
    { text: 'spotify', value: 'spotify' },
    { text: 'square', value: 'square' },
    { text: 'square-o', value: 'square-o' },
    { text: 'stack-exchange', value: 'stack-exchange' },
    { text: 'stack-overflow', value: 'stack-overflow' },
    { text: 'star', value: 'star' },
    { text: 'star-half', value: 'star-half' },
    { text: 'star-half-empty', value: 'star-half-empty' },
    { text: 'star-half-full', value: 'star-half-full' },
    { text: 'star-half-o', value: 'star-half-o' },
    { text: 'star-o', value: 'star-o' },
    { text: 'steam', value: 'steam' },
    { text: 'steam-square', value: 'steam-square' },
    { text: 'step-backward', value: 'step-backward' },
    { text: 'step-forward', value: 'step-forward' },
    { text: 'stethoscope', value: 'stethoscope' },
    { text: 'stop', value: 'stop' },
    { text: 'strikethrough', value: 'strikethrough' },
    { text: 'stumbleupon', value: 'stumbleupon' },
    { text: 'stumbleupon-circle', value: 'stumbleupon-circle' },
    { text: 'subscript', value: 'subscript' },
    { text: 'suitcase', value: 'suitcase' },
    { text: 'sun-o', value: 'sun-o' },
    { text: 'superscript', value: 'superscript' },
    { text: 'support', value: 'support' },
    { text: 'table', value: 'table' },
    { text: 'tablet', value: 'tablet' },
    { text: 'tachometer', value: 'tachometer' },
    { text: 'tag', value: 'tag' },
    { text: 'tags', value: 'tags' },
    { text: 'tasks', value: 'tasks' },
    { text: 'taxi', value: 'taxi' },
    { text: 'tencent-weibo', value: 'tencent-weibo' },
    { text: 'terminal', value: 'terminal' },
    { text: 'text-height', value: 'text-height' },
    { text: 'text-width', value: 'text-width' },
    { text: 'th', value: 'th' },
    { text: 'th-large', value: 'th-large' },
    { text: 'th-list', value: 'th-list' },
    { text: 'thumbs-down', value: 'thumbs-down' },
    { text: 'thumbs-o-down', value: 'thumbs-o-down' },
    { text: 'thumbs-o-up', value: 'thumbs-o-up' },
    { text: 'thumbs-up', value: 'thumbs-up' },
    { text: 'thumb-tack', value: 'thumb-tack' },
    { text: 'ticket', value: 'ticket' },
    { text: 'times', value: 'times' },
    { text: 'times-circle', value: 'times-circle' },
    { text: 'times-circle-o', value: 'times-circle-o' },
    { text: 'tint', value: 'tint' },
    { text: 'toggle-down', value: 'toggle-down' },
    { text: 'toggle-left', value: 'toggle-left' },
    { text: 'toggle-off', value: 'toggle-off' },
    { text: 'toggle-on', value: 'toggle-on' },
    { text: 'toggle-right', value: 'toggle-right' },
    { text: 'toggle-up', value: 'toggle-up' },
    { text: 'trash', value: 'trash' },
    { text: 'trash-o', value: 'trash-o' },
    { text: 'tree', value: 'tree' },
    { text: 'trello', value: 'trello' },
    { text: 'trophy', value: 'trophy' },
    { text: 'truck', value: 'truck' },
    { text: 'try', value: 'try' },
    { text: 'tty', value: 'tty' },
    { text: 'tumblr', value: 'tumblr' },
    { text: 'tumblr-square', value: 'tumblr-square' },
    { text: 'turkish-lira', value: 'turkish-lira' },
    { text: 'twitch', value: 'twitch' },
    { text: 'twitter', value: 'twitter' },
    { text: 'twitter-square', value: 'twitter-square' },
    { text: 'umbrella', value: 'umbrella' },
    { text: 'underline', value: 'underline' },
    { text: 'undo', value: 'undo' },
    { text: 'university', value: 'university' },
    { text: 'unlink', value: 'unlink' },
    { text: 'unlock', value: 'unlock' },
    { text: 'unlock-alt', value: 'unlock-alt' },
    { text: 'unsorted', value: 'unsorted' },
    { text: 'upload', value: 'upload' },
    { text: 'usd', value: 'usd' },
    { text: 'user', value: 'user' },
    { text: 'user-md', value: 'user-md' },
    { text: 'users', value: 'users' },
    { text: 'video-camera', value: 'video-camera' },
    { text: 'vimeo-square', value: 'vimeo-square' },
    { text: 'vine', value: 'vine' },
    { text: 'vk', value: 'vk' },
    { text: 'volume-down', value: 'volume-down' },
    { text: 'volume-off', value: 'volume-off' },
    { text: 'volume-up', value: 'volume-up' },
    { text: 'warning', value: 'warning' },
    { text: 'wechat', value: 'wechat' },
    { text: 'weibo', value: 'weibo' },
    { text: 'weixin', value: 'weixin' },
    { text: 'wheelchair', value: 'wheelchair' },
    { text: 'wifi', value: 'wifi' },
    { text: 'windows', value: 'windows' },
    { text: 'won', value: 'won' },
    { text: 'wordpress', value: 'wordpress' },
    { text: 'wrench', value: 'wrench' },
    { text: 'xing', value: 'xing' },
    { text: 'xing-square', value: 'xing-square' },
    { text: 'yahoo', value: 'yahoo' },
    { text: 'yelp', value: 'yelp' },
    { text: 'yen', value: 'yen' },
    { text: 'youtube', value: 'youtube' },
    { text: 'youtube-play', value: 'youtube-play' },
    { text: 'youtube-square', value: 'youtube-square' }
  ];

//General
  var ctscGeneratorGeneralAnimation = [
    { text: 'None', value: '' },
    { text: 'Zoomin', value: 'zoomin' },
    { text: 'Zoomout', value: 'zoomout' },
    { text: 'Slide Upwards', value: 'slideup' },
    { text: 'Slide Downwards', value: 'slidedown' },
    { text: 'Slide To Left', value: 'slideleft' },
    { text: 'Slide To Right', value: 'slideright' },
    { text: 'Spin To Left', value: 'spinleft' },
    { text: 'Spin To Right', value: 'spinright' }
  ];

//Buttons
  var ctscGeneratorButton = [
    { type: 'textbox', name: 'text', label: 'Button Text', value: 'Read More' },
    { type: 'textbox', name: 'description', label: 'Description Text', value: 'Click Here' },
    { type: 'textbox', name: 'url', label: 'Target URL', value: 'https://www.cpothemes.com', minWidth: 350 },
    { type: 'textbox', name: 'background', label: 'Background Color', value: '#666666' },
    { type: 'textbox', name: 'gradient', label: 'Gradient Color', value: '#444444' },
    { type: 'textbox', name: 'color', label: 'Text Color', value: '#FFFFFF' },
    {
      type: 'listbox', name: 'size', label: 'Button Size', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Small', value: 'small' },
      { text: 'Medium', value: 'medium' },
      { text: 'Large', value: 'large' },
      { text: 'Huge', value: 'huge' }
    ]
    },
    {
      type: 'listbox', name: 'position', label: 'Button Position', values: [
      { text: 'None', value: 'none' },
      { text: 'To The Left', value: 'left' },
      { text: 'Centered', value: 'center' },
      { text: 'To The Right', value: 'right' }
    ]
    },
    { type: 'textbox', name: 'target', label: 'Target Attribute', value: '' },
    { type: 'textbox', name: 'rel', label: 'Rel Attribute', value: '' },
    { type: 'listbox', name: 'icon', label: 'Button Icon', values: ctscGeneratorGeneralIcons },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Focus boxes
  var ctscGeneratorFocus = [
    { type: 'textbox', name: 'background', label: 'Background Color', value: '#666666' },
    { type: 'textbox', name: 'gradient', label: 'Gradient Color', value: '#444444' },
    {
      type: 'listbox', name: 'color', label: 'Content Color', values: [
      { text: 'Light', value: 'light' },
      { text: 'Dark', value: 'dark' }
    ]
    },
    {
      type: 'listbox', name: 'style', label: 'Box Style', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'With Shadow', value: 'shadow' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Notification messages
  var ctscGeneratorMessage = [
    {
      type: 'listbox', name: 'type', label: 'Message Type', values: [
      { text: 'Info', value: 'info' },
      { text: 'Confirmation', value: 'ok' },
      { text: 'Error', value: 'error' },
      { text: 'Warning', value: 'warning' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Progress bars
  var ctscGeneratorProgress = [
    { type: 'textbox', name: 'value', label: 'Progress Amount (%)', value: '50' },
    { type: 'textbox', name: 'title', label: 'Title', value: 'Progress Bar' },
    { type: 'listbox', name: 'icon', label: 'Icon', values: ctscGeneratorGeneralIcons },
    { type: 'textbox', name: 'background', label: 'Background Color', value: '#666666' },
    { type: 'textbox', name: 'gradient', label: 'Gradient Color', value: '#444444' },
    {
      type: 'listbox', name: 'size', label: 'Size', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Small', value: 'small' },
      { text: 'Medium', value: 'medium' },
      { text: 'Large', value: 'large' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Inline features
  var ctscGeneratorFeature = [
    { type: 'textbox', name: 'title', label: 'Title', value: 'Feature Title' },
    { type: 'listbox', name: 'icon', label: 'Icon', values: ctscGeneratorGeneralIcons },
    { type: 'textbox', name: 'color', label: 'Icon Color', value: '#FFFFFF' },
    { type: 'textbox', name: 'background', label: 'Icon Background', value: '#666666' },
    { type: 'textbox', name: 'gradient', label: 'Icon Gradient', value: '#444444' },
    { type: 'textbox', name: 'image', label: 'Image', value: '' },
    {
      type: 'listbox', name: 'style', label: 'Feature Style', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'horizontal', value: 'horizontal' },
      { text: 'vertical', value: 'vertical' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Team members
  var ctscGeneratorTeam = [
    { type: 'textbox', name: 'name', label: 'Name', value: 'John Doe' },
    { type: 'textbox', name: 'title', label: 'Title', value: 'Senior Employee' },
    { type: 'textbox', name: 'image', label: 'Image', value: '' },
    { type: 'textbox', name: 'web', label: 'Personal Website', value: '' },
    { type: 'textbox', name: 'facebook', label: 'Facebook Profile', value: '' },
    { type: 'textbox', name: 'twitter', label: 'Twitter Profile', value: '' },
    { type: 'textbox', name: 'gplus', label: 'Google+ Profile', value: '' },
    { type: 'textbox', name: 'linkedin', label: 'LinkedIn Profile', value: '' },
    { type: 'textbox', name: 'pinterest', label: 'Pinterest Profile', value: '' },
    { type: 'textbox', name: 'Tumblr', label: 'Tumblr Profile', value: '' },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Testimonials
  var ctscGeneratorTestimonial = [
    { type: 'textbox', name: 'name', label: 'Name', value: 'John Doe' },
    { type: 'textbox', name: 'title', label: 'Title', value: 'Professional Consultant' },
    { type: 'textbox', name: 'image', label: 'Image', value: '' },
    {
      type: 'listbox', name: 'style', label: 'Style', values: [
      { text: 'To The Left', value: 'left' },
      { text: 'To The Right', value: 'right' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Counters
  var ctscGeneratorCounter = [
    { type: 'textbox', name: 'number', label: 'Number', value: '999' },
    { type: 'textbox', name: 'title', label: 'Title', value: 'Title' },
    { type: 'listbox', name: 'icon', label: 'Icon', values: ctscGeneratorGeneralIcons },
    { type: 'textbox', name: 'color', label: 'Icon Color', value: '#ff9900' },
    {
      type: 'listbox', name: 'size', label: 'Size', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Small', value: 'small' },
      { text: 'Medium', value: 'medium' },
      { text: 'Large', value: 'large' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Accordions
  var ctscGeneratorAccordion = [
    { type: 'textbox', name: 'text', label: 'Title', value: 'Starter' },
    { type: 'listbox', name: 'icon', label: 'Icon', values: ctscGeneratorGeneralIcons },
    {
      type: 'listbox', name: 'state', label: 'State', values: [
      { text: 'Closed', value: 'closed' },
      { text: 'Open', value: 'open' }
    ]
    },
    {
      type: 'listbox', name: 'style', label: 'Style', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Boxed', value: 'boxed' }
    ]
    },
    { type: 'textbox', name: 'group', label: 'Group', value: 'group1' },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Tabbed Content Group
  var ctscGeneratorTabGroup = [
    {
      type: 'listbox', name: 'style', label: 'Style', values: [
      { text: 'Horizontal', value: 'horizontal' },
      { text: 'Vertical', value: 'vertical' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Single tab
  var ctscGeneratorTab = [
    { type: 'textbox', name: 'title', label: 'Title', value: 'Title' }
  ];

//Slideshow
  var ctscGeneratorSlideshow = [
    {
      type: 'listbox', name: 'effect', label: 'Effect', values: [
      { text: 'Fade', value: 'fade' },
      { text: 'Cover', value: 'cover' },
      { text: 'Uncover', value: 'uncover' },
      { text: 'Horizontal Scroll', value: 'scrollHorz' },
      { text: 'Vertical Scroll', value: 'scrollVert' },
      { text: 'Scroll to the Left', value: 'scrollLeft' },
      { text: 'Scroll to the Right', value: 'scrollRight' }
    ]
    },
    { type: 'textbox', name: 'speed', label: 'Speed', value: '800' },
    { type: 'textbox', name: 'timeout', label: 'Timeout', value: '6000' },
    {
      type: 'listbox', name: 'pager', label: 'Pager', values: [
      { text: 'None', value: 'none' },
      { text: 'Circle', value: 'circle' }
    ]
    },
    {
      type: 'listbox', name: 'navigation', label: 'Navigation', values: [
      { text: 'None', value: 'none' },
      { text: 'Circle', value: 'circle' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Map
  var ctscGeneratorMap = [
    { type: 'textbox', name: 'color', label: 'Color', value: '' },
    { type: 'textbox', name: 'height', label: 'Height', value: '400' },
    { type: 'textbox', name: 'latitude', label: 'Latitude', value: '' },
    { type: 'textbox', name: 'longitude', label: 'Longitude', value: '' },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Pricing items
  var ctscGeneratorPricing = [
    { type: 'textbox', name: 'title', label: 'Title', value: 'Starter' },
    { type: 'textbox', name: 'subtitle', label: 'Subtitle', value: 'Most Popular' },
    { type: 'textbox', name: 'price', label: 'Price Amount', value: '99' },
    { type: 'textbox', name: 'before', label: 'Before Price', value: '$' },
    { type: 'textbox', name: 'after', label: 'After Price', value: '' },
    { type: 'textbox', name: 'description', label: 'Price Description', value: 'One Time Fee' },
    { type: 'textbox', name: 'color', label: 'Color Scheme', value: '#666666' },
    {
      type: 'listbox', name: 'type', label: 'Pricing Type', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Highlighted', value: 'highlight' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Optin Form
  var ctscGeneratorOptin = [
    { type: 'textbox', name: 'url', label: 'URL', value: '' },
    { type: 'textbox', name: 'captcha', label: 'Captcha', value: '' },
    { type: 'textbox', name: 'email', label: 'Email Label', value: 'Your Email' },
    { type: 'textbox', name: 'firstname', label: 'First Name Label', value: 'Your Name' },
    { type: 'textbox', name: 'lastname', label: 'Last Name Label', value: '' },
    { type: 'textbox', name: 'submit', label: 'Submit Label', value: 'Subscribe' },
    {
      type: 'listbox', name: 'style', label: 'List Style', values: [
      { text: 'Horizontal', value: 'horizontal' },
      { text: 'Vertical', value: 'vertical' }
    ]
    },
    {
      type: 'listbox', name: 'size', label: 'Size', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Medium', value: 'medium' },
      { text: 'Large', value: 'large' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Dropcap
  var ctscGeneratorDropcap = [
    { type: 'textbox', name: 'text', label: 'Text', value: '' },
    { type: 'textbox', name: 'color', label: 'Color', value: '' },
    {
      type: 'listbox', name: 'style', label: 'Style', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Square', value: 'square' },
      { text: 'Round', value: 'round' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Definition
  var ctscGeneratorDefinition = [
    { type: 'textbox', name: 'title', label: 'Title', value: '' },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Custom lists
  var ctscGeneratorList = [
    { type: 'listbox', name: 'icon', label: 'Icon', values: ctscGeneratorGeneralIcons },
    { type: 'textbox', name: 'content', label: 'Text', value: 'Lorem ipsum dolor sit amet.' },
    { type: 'textbox', name: 'color', label: 'Icon Color', value: '#FFFFFF' },
    { type: 'textbox', name: 'background', label: 'Background', value: '#666666' },
    { type: 'textbox', name: 'gradient', label: 'Gradient', value: '#444444' },
    {
      type: 'listbox', name: 'style', label: 'List Style', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Square', value: 'square' },
      { text: 'Round', value: 'round' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Posts lists
  var ctscGeneratorPosts = [
    { type: 'textbox', name: 'type', label: 'Post Type', value: 'post' },
    { type: 'textbox', name: 'number', label: 'Number of Posts', value: '5' },
    {
      type: 'listbox', name: 'orderby', label: 'Order Posts By', values: [
      { text: 'By Date', value: 'date' },
      { text: 'By Post ID', value: 'ID' },
      { text: 'By Title', value: 'title' },
      { text: 'By Menu Order', value: 'menu_order' },
      { text: 'By Number of Comments', value: 'comment_count' },
      { text: 'By Author', value: 'author' },
      { text: 'Random Order', value: 'rand' }
    ]
    },
    {
      type: 'listbox', name: 'order', label: 'Order Direction', values: [
      { text: 'Descending', value: 'DESC' },
      { text: 'Ascending', value: 'ASC' }
    ]
    },
    {
      type: 'listbox', name: 'columns', label: 'Number of Columns', values: [
      { text: '1 Column', value: '1' },
      { text: '2 Columns', value: '2' },
      { text: '3 Columns', value: '3' },
      { text: '4 Columns', value: '4' }
    ]
    },
    {
      type: 'listbox', name: 'style', label: 'List Style', values: [
      { text: 'List', value: 'list' },
      { text: 'Grid', value: 'grid' }
    ]
    },
    {
      type: 'listbox', name: 'thumbnail', label: 'Display Thumbnails', value: 'medium', values: [
      { text: 'Thumbnail Size', value: 'thumbnail' },
      { text: 'Medium Size', value: 'medium' },
      { text: 'Large Size', value: 'large' },
      { text: 'Full Size', value: 'full' },
      { text: 'Hide Thumbnail', value: 'none' }
    ]
    },
    {
      type: 'listbox', name: 'date', label: 'Display Dates', value: 'none', values: [
      { text: 'Show', value: 'normal' },
      { text: 'Hide', value: 'none' }
    ]
    },
    {
      type: 'listbox', name: 'author', label: 'Display Authors', value: 'none', values: [
      { text: 'Show', value: 'normal' },
      { text: 'Hide', value: 'none' }
    ]
    },
    {
      type: 'listbox', name: 'comments', label: 'Display Comments', value: 'none', values: [
      { text: 'Show', value: 'normal' },
      { text: 'Hide', value: 'none' }
    ]
    },
    {
      type: 'listbox', name: 'excerpt', label: 'Display Excerpts', value: 'none', values: [
      { text: 'Show', value: 'normal' },
      { text: 'Hide', value: 'none' }
    ]
    },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Login Form
  var ctscGeneratorLogin = [
    {
      type: 'textbox',
      name: 'redirect',
      label: 'Redirect URL',
      value: '',
      tooltip: 'Redirect the user after a successful login. By default, the current page will be used. Example: https://mysite.com'
    },
    {
      type: 'textbox',
      name: 'content',
      label: 'Logged In Message',
      value: '',
      tooltip: 'This content will be displayed when the user is logged in.'
    },
    {
      type: 'textbox',
      name: 'username',
      label: 'Username Text',
      value: 'Username'
    },
    {
      type: 'textbox',
      name: 'password',
      label: 'Password Text',
      value: 'Password'
    },
    {
      type: 'textbox',
      name: 'remember',
      label: 'Remember Me Text',
      value: 'Remember Me'
    },
    {
      type: 'textbox',
      name: 'login',
      label: 'Log In Button Text',
      value: 'Log In'
    },
    {
      type: 'textbox',
      name: 'id',
      label: 'Element ID',
      value: ''
    },
    {
      type: 'textbox',
      name: 'class',
      label: 'CSS Classes'
    },
    {
      type: 'listbox',
      name: 'animation',
      label: 'Entrance Animation',
      values: ctscGeneratorGeneralAnimation
    }
  ];

//Registration Form
  var ctscGeneratorRegister = [
    { type: 'textbox', name: 'redirect', label: 'Redirect URL', value: '', tooltip: 'Redirect the user after successfully registering. Example: https://mysite.com' },
    { type: 'textbox', name: 'content', label: 'Logged In Message', value: '', tooltip: 'This content will be displayed when the user is logged in.' },
    { type: 'textbox', name: 'username', label: 'Username Text', value: 'Username' },
    { type: 'textbox', name: 'email', label: 'Email Text', value: 'Email' },
    { type: 'textbox', name: 'firstname', label: 'First Name Text', value: 'First Name', tooltip: 'Leave empty to remove this field.' },
    { type: 'textbox', name: 'password', label: 'Password Text', value: 'Password' },
    { type: 'textbox', name: 'submit', label: 'Submit Text', value: 'Create Account' },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Columns
  var ctscGeneratorColumns = [
    {
      type: 'listbox', name: 'columns', label: 'Columns', values: [
      { text: '2 Columns', value: '2' },
      { text: '3 Columns', value: '3' },
      { text: '4 Columns', value: '4' },
      { text: '5 Columns', value: '5' }
    ]
    },
    {
      type: 'listbox', name: 'style', label: 'Style', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Narrow', value: 'narrow' },
      { text: 'Fit', value: 'fit' }
    ]
    }
  ];

//Separator
  var ctscGeneratorSeparator = [
    { type: 'textbox', name: 'title', label: 'Title', value: '' },
    { type: 'listbox', name: 'icon', label: 'Icon', values: ctscGeneratorGeneralIcons },
    {
      type: 'listbox', name: 'style', label: 'Style', values: [
      { text: 'Normal', value: 'normal' },
      { text: 'Dashed', value: 'dashed' },
      { text: 'Dotted', value: 'dotted' },
      { text: 'Thick', value: 'thick' },
      { text: 'Narrow', value: 'narrow' }
    ]
    },
    { type: 'textbox', name: 'color', label: 'Color', value: '' },
    { type: 'textbox', name: 'top', label: 'Back To Top Text', value: '' },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation }
  ];

//Animation Effect
  var ctscGeneratorAnimation = [
    { type: 'textbox', name: 'delay', label: 'Delay (ms)', value: '200' },
    { type: 'listbox', name: 'animation', label: 'Entrance Animation', values: ctscGeneratorGeneralAnimation },
    { type: 'textbox', name: 'id', label: 'Element ID', value: '' },
    { type: 'textbox', name: 'class', label: 'CSS Classes' }
  ];

//Spacer
  var ctscGeneratorSpacer = [
    { type: 'textbox', name: 'height', label: 'Height (px)', value: '25' }
  ];

  tinymce.PluginManager.add( 'ctsc_shortcodes', function( editor, url ) {
    editor.addButton( 'ctsc_shortcodes_button', {
      title: 'CPO Shortcodes',
      type: 'menubutton',
      icon: 'icon ctsc-shortcodes-icon',
      menu: [
        {
          text: 'Basic Elements',
          menu: [
            {
              text: 'Button',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Multimedia Button',
                  body: ctscGeneratorButton,
                  autoScroll: true,
                  width: 600,
                  height: 500,
                  classes: 'ctsc-generator-popup',
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'button url="' + e.data.url + '" color="' + e.data.color + '" background="' + e.data.background + '" gradient="' +
                        e.data.gradient + '" description="' + e.data.description + '" size="' + e.data.size + '" position="' + e.data.position + '" icon="' + e.data.icon +
                        '" target="' + e.data.target + '" rel="' + e.data.rel + '"' + elementID + elementClass + elementAnimation + ']' + e.data.text + '[/' + ctscVars.prefix +
                        'button]' );
                  }
                } );
              }
            },
            {
              text: 'Focus Box',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Focus Box',
                  body: ctscGeneratorFocus,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'focus background="' + e.data.background + '" gradient="' + e.data.gradient + '" color="' + e.data.color + '" style="' +
                        e.data.style + '" ' + elementID + elementClass + elementAnimation + ']' + editor.selection.getContent() + '[/' + ctscVars.prefix + 'focus]' );
                  }
                } );
              }
            },
            {
              text: 'Message',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Notification Message',
                  body: ctscGeneratorMessage,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'message type="' + e.data.type + '" ' + elementID + elementClass + elementAnimation + ']' + editor.selection.getContent() +
                        '[/' + ctscVars.prefix + 'message]' );
                  }
                } );
              }
            },
            {
              text: 'Progress',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Progress Bar',
                  body: ctscGeneratorProgress,
                  onsubmit: function( e ) {
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'progress value="' + e.data.value + '" title="' + e.data.title + '" icon="' + e.data.icon + '" background="' + e.data.background +
                        '" gradient="' + e.data.gradient + '" size="' + e.data.size + '"  id="' + e.data.id + '" class="' + e.data[ 'class' ] + '" animation="' + e.data.animation +
                        '"]' + editor.selection.getContent() + '[/' + ctscVars.prefix + 'progress]' );
                  }
                } );
              }
            },
            {
              text: 'Inline Feature',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Inline Feature',
                  body: ctscGeneratorFeature,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'feature title="' + e.data.title + '" icon="' + e.data.icon + '" color="' + e.data.color + '" background="' + e.data.background +
                        '" gradient="' + e.data.gradient + '" image="' + e.data.image + '" style="' + e.data.style + '" ' + elementID + elementClass + elementAnimation + ']' +
                        editor.selection.getContent() + '[/' + ctscVars.prefix + 'feature]' );
                  }
                } );
              }
            },
            {
              text: 'Team Member',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Team Member',
                  body: ctscGeneratorTeam,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'team name="' + e.data.name + '" title="' + e.data.title + '" image="' + e.data.image + '" web="' + e.data.web + '" facebook="' +
                        e.data.facebook + '" twitter="' + e.data.twitter + '" gplus="' + e.data.gplus + '" linkedin="' + e.data.linkedin + '" pinterest="' + e.data.pinterest +
                        '" Tumblr="' + e.data.Tumblr + '" ' + elementID + elementClass + elementAnimation + ']' + editor.selection.getContent() + '[/' + ctscVars.prefix +
                        'team]' );
                  }
                } );
              }
            },
            {
              text: 'Testimonial',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Testimonial',
                  body: ctscGeneratorTestimonial,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'testimonial name="' + e.data.name + '" title="' + e.data.title + '" image="' + e.data.image + '" style="' + e.data.style + '" ' +
                        elementID + elementClass + elementAnimation + ']' + editor.selection.getContent() + '[/' + ctscVars.prefix + 'testimonial]' );
                  }
                } );
              }
            },
            {
              text: 'Counter',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Counter',
                  body: ctscGeneratorCounter,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'counter number="' + e.data.number + '" title="' + e.data.title + '" icon="' + e.data.icon + '" color="' + e.data.color +
                        '" size="' + e.data.size + '" ' + elementID + elementClass + elementAnimation + ']' + editor.selection.getContent() + '[/' + ctscVars.prefix +
                        'counter]' );
                  }
                } );
              }
            },
            {
              text: 'Definition',
              onclick: function() {
                editor.selection.setContent(
                    '[' + ctscVars.prefix + 'definition title="Definition Title"]' + editor.selection.getContent() + '[/' + ctscVars.prefix + 'definition]' );
              }
            }
          ]
        }, {
          text: 'Advanced & Interactive',
          menu: [
            {
              text: 'Accordion',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Accordion',
                  body: ctscGeneratorAccordion,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'accordion text="' + e.data.text + '" icon="' + e.data.icon + '" state="' + e.data.state + '" style="' + e.data.style +
                        '" group="' + e.data.group + '" ' + elementID + elementClass + elementAnimation + ']' + editor.selection.getContent() + '[/' + ctscVars.prefix +
                        'accordion]' );
                  }
                } );
              }
            },
            {
              text: 'Tabbed Content',
              menu: [
                {
                  text: 'Tab Group',
                  onclick: function() {
                    editor.windowManager.open( {
                      title: 'Add Tab Group',
                      body: ctscGeneratorTabGroup,
                      onsubmit: function( e ) {
                        var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                        var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                        var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                        editor.selection.setContent(
                            '[' + ctscVars.prefix + 'tabs style="' + e.data.style + '" ' + elementID + elementClass + elementAnimation + '][/' + ctscVars.prefix + 'tabs]' );
                      }
                    } );
                  }
                },
                {
                  text: 'Single Tab',
                  onclick: function() {
                    editor.windowManager.open( {
                      title: 'Add Single Tab',
                      body: ctscGeneratorTab,
                      onsubmit: function( e ) {
                        editor.selection.setContent(
                            '[' + ctscVars.prefix + 'tab title="' + e.data.title + '"]' + editor.selection.getContent() + '[/' + ctscVars.prefix + 'tab]' );
                      }
                    } );
                  }
                }
              ]
            },
            {
              text: 'Slideshow',
              menu: [
                {
                  text: 'Slideshow',
                  onclick: function() {
                    editor.windowManager.open( {
                      title: 'Add Image Slideshow',
                      body: ctscGeneratorSlideshow,
                      onsubmit: function( e ) {
                        var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                        var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                        var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                        editor.selection.setContent(
                            '[' + ctscVars.prefix + 'slideshow images="' + e.data.timages + '" effect="' + e.data.effect + '" speed="' + e.data.speed + '" timeout="' +
                            e.data.timeout + '" pager="' + e.data.pager + '" navigation="' + e.data.navigation + '" ' + elementID + elementClass + elementAnimation + '][/' +
                            ctscVars.prefix + 'slideshow]' );
                      }
                    } );
                  }
                },
                {
                  text: 'Single Slide',
                  onclick: function() {
                    editor.selection.setContent( '[' + ctscVars.prefix + 'slide]' + editor.selection.getContent() + '[/' + ctscVars.prefix + 'tab]' );
                  }
                }
              ]
            },
            {
              text: 'Google Map',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Google Map',
                  body: ctscGeneratorMap,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'map color="' + e.data.color + '" height="' + e.data.height + '" latitude="' + e.data.latitude + '" longitude="' +
                        e.data.longitude + '" ' + elementID + elementClass + elementAnimation + '][/' + ctscVars.prefix + 'map]' );
                  }
                } );
              }
            },
            {
              text: 'Pricing Table',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New pricing table',
                  body: ctscGeneratorPricing,
                  autoScroll: true,
                  width: 600,
                  height: 500,
                  classes: 'ctsc-generator-popup',
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'pricing title="' + e.data.title + '" subtitle="' + e.data.subtitle + '" price="' + e.data.price + '" before="' + e.data.before +
                        '" after="' + e.data.after + '"  description="' + e.data.description + '" color="' + e.data.color + '" type="' + e.data.type + '" ' + elementID +
                        elementClass + elementAnimation + '][/' + ctscVars.prefix + 'pricing]' );
                  }
                } );
              }
            },
            {
              text: 'Mailchimp Optin Form',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Mailchimp optin form',
                  body: ctscGeneratorOptin,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'optin url="' + e.data.url + '" captcha="' + e.data.captcha + '" email="' + e.data.email + '" firstname="' + e.data.firstname +
                        '" lastname="' + e.data.lastname + '" submit="' + e.data.submit + '"  style="' + e.data.style + '" ' + elementID + elementClass + elementAnimation +
                        '][/' + ctscVars.prefix + 'optin]' );
                  }
                } );
              }
            }
          ]
        }, {
          text: 'Texts & Paragraphs',
          menu: [
            {
              text: 'Dropcap',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New dropcap',
                  body: ctscGeneratorDropcap,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'dropcap color="' + e.data.color + '" style="' + e.data.style + '" ' + elementID + elementClass + elementAnimation + ']' +
                        e.data.text + '[/' + ctscVars.prefix + 'dropcap]' );
                  }
                } );
              }
            },
            {
              text: 'Leading',
              onclick: function() {
                editor.selection.setContent( '[' + ctscVars.prefix + 'leading]' + editor.selection.getContent() + '[/' + ctscVars.prefix + 'leading]' );
              }
            },
            {
              text: 'Definition',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Definition',
                  body: ctscGeneratorDefinition,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'definition title="' + e.data.title + '" ' + elementID + elementClass + elementAnimation + '][/' + ctscVars.prefix +
                        'definition]' );
                  }
                } );
              }
            },
            {
              text: 'List Item',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New List',
                  body: ctscGeneratorList,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'list icon="' + e.data.icon + '" content="' + e.data.content + '" color="' + e.data.color + '" background="' + e.data.background +
                        '" gradient="' + e.data.gradient + '" style="' + e.data.style + '" ' + elementID + elementClass + elementAnimation + ']' + e.data.content + '[/' +
                        ctscVars.prefix + 'list]' );
                  }
                } );
              }
            }
          ]
        }, {
          text: 'Dynamic Content',
          menu: [
            {
              text: 'Post Listing',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Post List',
                  body: ctscGeneratorPosts,
                  autoScroll: true,
                  width: 600,
                  height: 500,
                  classes: 'ctsc-generator-popup',
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                      '[' + ctscVars.prefix + 'posts type="' + e.data.type + '" number="' + e.data.number + '" thumbnail="' + e.data.thumbnail + '" columns="' + e.data.columns + '" style="' + e.data.style +
                      '" date="' + e.data.date + '" author="' + e.data.author + '" comments="' + e.data.comments + '" excerpt="' + e.data.excerpt + '" after="' + e.data.after +
                      '" description="' + e.data.description + '" color="' + e.data.color + '" ' + elementID + elementClass + elementAnimation + ']' );
                  }
                } );
              }
            }
          ]
        }, {
          text: 'User Management',
          menu: [
            {
              text: 'Login Form',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Login Form',
                  body: ctscGeneratorLogin,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    var elementUsername = '' !== e.data.username ? ' username="' + e.data.username + '"' : '';
                    var elementPassword = '' !== e.data.password ? ' username="' + e.data.password + '"' : '';
                    var elementLogin = '' !== e.data.login ? ' username="' + e.data.login + '"' : '';
                    var elementRemember = '' !== e.data.remember ? ' username="' + e.data.remember + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'login redirect="' + e.data.redirect + '" ' + elementUsername + elementPassword + elementLogin + elementRemember + elementID +
                        elementClass + elementAnimation + ']' + e.data.content + '[/' + ctscVars.prefix + 'login]' );
                  }
                } );
              }
            }, {
              text: 'Registration Form',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Registration Form',
                  body: ctscGeneratorRegister,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    var elementFirstname = '' !== e.data.firstname ? ' firstname="' + e.data.firstname + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'register redirect="' + e.data.redirect + '" email="' + e.data.email + '" username="' + e.data.username + '" password="' +
                        e.data.password + '" submit="' + e.data.submit + '" ' + elementFirstname + elementID + elementClass + elementAnimation + ']' + e.data.content + '[/' +
                        ctscVars.prefix + 'register]' );
                  }
                } );
              }
            }
          ]
        }, {
          text: 'Layout',
          menu: [
            {
              text: 'Section',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Section',
                  body: ctscGeneratorRegister,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'section title="' + e.data.title + '" subtitle="' + e.data.subtitle + '" background="' + e.data.background + '" gradient="' +
                        e.data.gradient + '" color="' + e.data.color + '" padding="' + e.data.padding + '" ' + elementID + elementClass + elementAnimation + '][/' +
                        ctscVars.prefix + 'section]' );
                  }
                } );
              }
            },
            {
              text: 'Columns',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Columns',
                  body: ctscGeneratorColumns,
                  onsubmit: function( e ) {
                    var elementColumns = e.data.columns;
                    var elementStyle = 'normal' !== e.data.style ? ' style="' + e.data.style + '"' : '';
                    switch ( elementColumns ) {
                      case '2':
                        editor.selection.setContent(
                            '[' + ctscVars.prefix + 'column_half' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_half][' + ctscVars.prefix + 'column_half_last' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' +
                            ctscVars.prefix + 'column_half_last]' );
                        break;
                      case '3':
                        editor.selection.setContent(
                            '[' + ctscVars.prefix + 'column_third' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_third][' + ctscVars.prefix + 'column_third' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_third][' + ctscVars.prefix + 'column_third_last' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' +
                            ctscVars.prefix + 'column_third_last]' );
                        break;
                      case '4':
                        editor.selection.setContent(
                            '[' + ctscVars.prefix + 'column_fourth' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_fourth][' + ctscVars.prefix + 'column_fourth' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_fourth][' + ctscVars.prefix + 'column_fourth' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_fourth][' + ctscVars.prefix + 'column_fourth_last' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' +
                            ctscVars.prefix + 'column_fourth_last]' );
                        break;
                      case '5':
                        editor.selection.setContent(
                            '[' + ctscVars.prefix + 'column_fifth' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_fifth][' + ctscVars.prefix + 'column_fifth' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_fifth][' + ctscVars.prefix + 'column_fifth' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_fifth][' + ctscVars.prefix + 'column_fifth' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' + ctscVars.prefix +
                            'column_fifth][' + ctscVars.prefix + 'column_fifth_last' + elementStyle + ']<br><br>' + editor.selection.getContent() + '<br><br>[/' +
                            ctscVars.prefix + 'column_fifth_last]' );
                        break;
                    }
                  }
                } );
              }
            },
            {
              text: 'Separator',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add separator',
                  body: ctscGeneratorSeparator,
                  onsubmit: function( e ) {
                    var elementID = '' !== e.data.id ? ' id="' + e.data.id + '"' : '';
                    var elementClass = '' !== e.data[ 'class' ] ? ' class="' + e.data[ 'class' ] + '"' : '';
                    var elementAnimation = '' !== e.data.animation ? ' animation="' + e.data.animation + '"' : '';
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'separator title="' + e.data.title + '" icon="' + e.data.icon + '" style="' + e.data.style + '" color="' + e.data.color +
                        '" top="' + e.data.top + '" ' + elementID + elementClass + elementAnimation + '][/' + ctscVars.prefix + 'separator]' );
                  }
                } );
              }
            },
            {
              text: 'Animation Block',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add Animation Area',
                  body: ctscGeneratorAnimation,
                  onsubmit: function( e ) {
                    editor.selection.setContent(
                        '[' + ctscVars.prefix + 'animation delay="' + e.data.delay + '" animation="' + e.data.animation + '" id="' + e.data.id + '" class="' + e.data[ 'class' ] +
                        '"][/' + ctscVars.prefix + 'animation]' );
                  }
                } );
              }
            },
            {
              text: 'Spacer',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Add New Spacer',
                  body: ctscGeneratorSpacer,
                  onsubmit: function( e ) {
                    editor.selection.setContent( '[' + ctscVars.prefix + 'spacer height="' + e.data.height + '"]' );
                  }
                } );
              }
            },
            {
              text: 'Clearing DIV',
              onclick: function() {
                editor.selection.setContent( '[' + ctscVars.prefix + 'clear]' );
              }
            }
          ]
        }
      ]
    } );
  } );
})();
