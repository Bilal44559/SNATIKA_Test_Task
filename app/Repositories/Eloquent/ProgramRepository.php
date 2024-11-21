<?php

namespace App\Repositories\Eloquent;

use App\Models\Program;
use App\Repositories\Contracts\ProgramRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class ProgramRepository implements ProgramRepositoryInterface
{
    /**
     * Get all programs.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Program::all();
    }

    /**
     * Create a new program.
     *
     * @param array $data
     * @return \App\Models\Program
     */
    public function create(array $data)
    {
        return Program::create($data);
    }

    /**
     * Find a program by its ID.
     *
     * @param int $id
     * @return \App\Models\Program
     */
    public function findById($id)
    {
        return Program::findOrFail($id);
    }

    /**
     * Update a program by its ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update($id, array $data)
    {
        $program = $this->findById($id);
        return $program->update($data);
    }

    /**
     * Delete a program.
     *
     * @param int $id
     * @return void
     */
    public function delete($id)
    {
        $program = $this->findById($id);
        if ($program->icon && Storage::exists('public/' . $program->icon)) {
            Storage::delete('public/' . $program->icon);
        }
        $program->delete();
    }
}
