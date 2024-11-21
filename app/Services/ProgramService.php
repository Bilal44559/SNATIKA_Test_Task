<?php

namespace App\Services;

use App\Repositories\Contracts\ProgramRepositoryInterface;

class ProgramService
{
    protected $programRepository;

    public function __construct(ProgramRepositoryInterface $programRepository)
    {
        $this->programRepository = $programRepository;
    }

    /**
     * Get all programs.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllPrograms()
    {
        return $this->programRepository->all();
    }

    /**
     * Create a new program.
     *
     * @param array $data
     * @return \App\Models\Program
     */
    public function createProgram(array $data)
    {
        return $this->programRepository->create($data);
    }

    /**
     * Update an existing program.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProgram($id, array $data)
    {
        return $this->programRepository->update($id, $data);
    }

    /**
     * Delete a program.
     *
     * @param int $id
     * @return void
     */
    public function deleteProgram($id)
    {
        $this->programRepository->delete($id);
    }
}
