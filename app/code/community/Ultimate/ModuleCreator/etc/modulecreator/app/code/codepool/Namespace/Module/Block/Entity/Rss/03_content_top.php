			->addFilter('in_rss', 1)
			->setOrder('created_at');
		$collection->load();
		foreach ($collection as $item){
			$description = '<p>';
