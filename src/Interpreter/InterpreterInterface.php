<?php declare(strict_types=1);

namespace Qlimix\Queue\Interpreter;

use Qlimix\Queue\Interpreter\Exception\InterpretationException;

interface InterpreterInterface
{
    /**
     * @return mixed
     *
     * @throws InterpretationException
     */
    public function interpret(string $message);
}
