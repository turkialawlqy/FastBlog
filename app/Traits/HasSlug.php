<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    public $target;
    public $tartget_slug;
    private $CODE_LEN = 10;
    public function initializeHasSlug()
    {
        $this->target = get_class($this);
    }
    public function syncSlug()
    {
        $slug = $this->slug;
        if (isset($slug) && $slug != null) {
            if ($slug->slug == "") {
                if (!$this->tartget_slug) {
                    $this->tartget_slug = Str::slug($this->title);
                }

                $slug->slug = $this->tartget_slug;
                $slug->update();
                return true;
            }
            if (isset($this->tartget_slug) && $this->tartget_slug != "" && $this->tartget_slug != $slug->slug) {
                $slug->slug = $this->tartget_slug;
                $slug->update();
                return true;
            }
        } else {
            $type = class_basename($this->target);
            $code = \App\Models\Slug::getCode();

            if (!$this->tartget_slug) {
                $this->tartget_slug = Str::slug($this->title) . '-' . $code;
            }
            \App\Models\Slug::create([
                'target_id' => $this->id,
                'target' => $this->target,
                'type' => $type,
                'code' => $code,
                'slug' => $this->tartget_slug,
                'status' => \App\Models\Slug::ACTIVE
            ]);

            return true;
        }

        return true;
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function slug()
    {
        return $this->hasOne(\App\Models\Slug::class, 'target_id', 'id')->where('target', $this->target);
    }
}
