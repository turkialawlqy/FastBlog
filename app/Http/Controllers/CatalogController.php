<?php

namespace App\Http\Controllers;

use App\DataTables\CatalogDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCatalogRequest;
use App\Http\Requests\UpdateCatalogRequest;
use App\Repositories\CatalogRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CatalogController extends AppBaseController
{
    /** @var  CatalogRepository */
    private $catalogRepository;

    public function __construct(CatalogRepository $catalogRepo)
    {
        $this->catalogRepository = $catalogRepo;
    }

    /**
     * Display a listing of the Catalog.
     *
     * @param CatalogDataTable $catalogDataTable
     * @return Response
     */
    public function index(CatalogDataTable $catalogDataTable)
    {
        return $catalogDataTable->render('catalogs.index');
    }

    /**
     * Show the form for creating a new Catalog.
     *
     * @return Response
     */
    public function create()
    {
        return view('catalogs.create');
    }

    /**
     * Store a newly created Catalog in storage.
     *
     * @param CreateCatalogRequest $request
     *
     * @return Response
     */
    public function store(CreateCatalogRequest $request)
    {
        $input = $request->all();

        $catalog = $this->catalogRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/catalogs.singular')]));

        return redirect(route('catalogs.index'));
    }

    /**
     * Display the specified Catalog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error(__('messages.not_found', ['model' => __('models/catalogs.singular')]));

            return redirect(route('catalogs.index'));
        }

        return view('catalogs.show')->with('catalog', $catalog);
    }

    /**
     * Show the form for editing the specified Catalog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error(__('messages.not_found', ['model' => __('models/catalogs.singular')]));

            return redirect(route('catalogs.index'));
        }

        return view('catalogs.edit')->with('catalog', $catalog);
    }

    /**
     * Update the specified Catalog in storage.
     *
     * @param  int              $id
     * @param UpdateCatalogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatalogRequest $request)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error(__('messages.not_found', ['model' => __('models/catalogs.singular')]));

            return redirect(route('catalogs.index'));
        }

        $catalog = $this->catalogRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/catalogs.singular')]));

        return redirect(route('catalogs.index'));
    }

    /**
     * Remove the specified Catalog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error(__('messages.not_found', ['model' => __('models/catalogs.singular')]));

            return redirect(route('catalogs.index'));
        }

        $this->catalogRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/catalogs.singular')]));

        return redirect(route('catalogs.index'));
    }
}
