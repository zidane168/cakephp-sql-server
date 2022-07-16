<!-- 
	video paginator helper	
	https://www.youtube.com/watch?v=LtPPdmSYUaU 
-->

<div class="pagination-block">
	<ul class="pagination">
		<?= $this->Paginator->first("<< "  . __('first')); ?>
		<?= $this->Paginator->prev("< " . __('previous') ) ?> 
		<?= $this->Paginator->numbers() ?> 
		<?= $this->Paginator->next(__('next') . " >") ?> 
		<?= $this->Paginator->last(__('last') . " >>") ?> 
	</ul>
	<p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>