<?php
?>
<script id="tmpl-mashsb-rwmb-media-item" type="text/html">
  <input type="hidden" name="{{{ data.fieldName }}}" value="{{{ data.id }}}" class="mashsb-rwmb-media-input">
  <div class="mashsb-rwmb-media-preview">
    <div class="mashsb-rwmb-media-content">
      <div class="centered">
        <# if ( 'image' === data.type && data.sizes ) { #>
          <# if ( data.sizes.thumbnail ) { #>
            <img src="{{{ data.sizes.thumbnail.url }}}">
          <# } else { #>
            <img src="{{{ data.sizes.full.url }}}">
          <# } #>
        <# } else { #>
          <# if ( data.image && data.image.src && data.image.src !== data.icon ) { #>
            <img src="{{ data.image.src }}" />
          <# } else { #>
            <img src="{{ data.icon }}" />
          <# } #>
        <# } #>
      </div>
    </div>
  </div>
  <div class="mashsb-rwmb-media-info">
    <h4>
      <a href="{{{ data.url }}}" target="_blank" title="{{{ i18nRwmbMedia.view }}}">
        <# if( data.title ) { #> {{{ data.title }}}
          <# } else { #> {{{ i18nRwmbMedia.noTitle }}}
        <# } #>
      </a>
    </h4>
    <p>{{{ data.mime }}}</p>
    <p>
      <a class="mashsb-rwmb-edit-media" title="{{{ i18nRwmbMedia.edit }}}" href="{{{ data.editLink }}}" target="_blank">
        <span class="dashicons dashicons-edit"></span>{{{ i18nRwmbMedia.edit }}}
      </a>
      <a href="#" class="mashsb-rwmb-remove-media" title="{{{ i18nRwmbMedia.remove }}}">
        <span class="dashicons dashicons-no-alt"></span>{{{ i18nRwmbMedia.remove }}}
      </a>
    </p>
  </div>
</script>

<script id="tmpl-mashsb-rwmb-media-status" type="text/html">
	<# if ( data.maxFiles > 0 ) { #>
		{{{ data.items }}}/{{{ data.maxFiles }}}
		<# if ( 1 < data.maxFiles ) { #>  {{{ i18nRwmbMedia.multiple }}} <# } else {#> {{{ i18nRwmbMedia.single }}} <# } #>
	<# } #>
</script>
