<?php
declare(strict_types=1);

namespace App\Action\User;

use Illuminate\Http\Request;
use App\Responder\User\IndexResponder;
use App\Domain\Usecase\ActiveUserSearchUsecase;
use App\Domain\Specification\ActiveUserSpecification;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexAction
 */
class IndexAction
{
    /** @var ActiveUserSearchUsecase */
    protected $usecase;

    /** @var ActiveUserSpecification */
    protected $specification;

    /**
     * IndexAction constructor.
     *
     * @param ActiveUserSpecification $specification
     * @param ActiveUserSearchUsecase $usecase
     */
    public function __construct(
        ActiveUserSpecification $specification,
        ActiveUserSearchUsecase $usecase
    ) {
        $this->specification = $specification;
        $this->usecase = $usecase;
    }

    /**
     * @param Request        $request
     * @param IndexResponder $responder
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(Request $request, IndexResponder $responder): Response
    {
        return $responder->emit(
            iterator_to_array($this->usecase->run($this->specification))
        );
    }
}
