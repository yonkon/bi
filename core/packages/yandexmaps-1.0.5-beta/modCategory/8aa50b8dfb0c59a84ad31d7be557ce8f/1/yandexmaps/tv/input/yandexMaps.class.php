<?php
class modTemplateVarInputRenderYandexMapsTV extends modTemplateVarInputRender
{
	public function getTemplate()
	{
		$corePath = $this->modx->getOption('table.core_path', null, $this->modx->getOption('core_path') . 'components/yandexmaps/');
		return $corePath . 'tv/tv.yandexMaps.input.tpl';
	}

}

return 'modTemplateVarInputRenderYandexMapsTV';