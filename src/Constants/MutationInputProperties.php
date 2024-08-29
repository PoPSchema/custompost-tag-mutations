<?php

declare(strict_types=1);

namespace PoPCMSSchema\CustomPostTagMutations\Constants;

class MutationInputProperties
{
    /**
     * Call it "id" instead of "customPostID" because this input
     * will be exposed in the GraphQL schema, for any CPT
     * (post, event, etc)
     */
    public final const CUSTOMPOST_ID = 'id';
    public final const TAGS_BY = 'tagsBy';
    public final const APPEND = 'append';
    public final const TAXONOMY = 'taxonomy';

    public final const IDS = 'ids';
    public final const SLUGS = 'slugs';
}
