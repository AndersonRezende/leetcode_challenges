<?php

namespace Anderson\LeetcodeChallenges\RegularExpressionMatching;

class RegularExpressionMatching
{

    /**
     * if char push
     * if next equals previous or * push
     * if next different pull and compare with string until stack is empty
     */
    public static function isMatch(string $s, string $p): bool {
        $stringStack = str_split($s);
        $patternStack = str_split(self::swapZeroOrMoreTimesChar($p));

        while ($stringStack) {
            $currentChar = array_shift($stringStack);
            $currentPattern = array_shift($patternStack);

            if (count($patternStack) && $patternStack[0] === '*') {
                array_shift($patternStack);
                $removed = false;

                if ($currentPattern === '.' && count($patternStack) && $patternStack[0] != '*') {

                }

                while (count($stringStack) && in_array($currentPattern, [$stringStack[0], '.'])) {
                    array_shift($stringStack);
                    $removed = true;
                }

                if (!$removed && $currentChar !== $currentPattern) {
                    array_unshift($stringStack, $currentChar);
                }
                continue;
            }

            if ($currentChar !== $currentPattern && $currentPattern !== '.') {
                return false;
            }
        }
        return count($stringStack) === count($patternStack);
    }

    /**
     * Optimize the pattern swapping 0 or plus elements to the end of the current sequence of the same char.<br>
     * Check if current item is '\*'.<br>
     * <ul>
     *     <li>
     *          If true:
     *          <ul>
     *              <li>Join with '*'.
     *              </li>
     *          </ul>
     *     </li>
     *     <li>If false:</li>
     * </ul>
     * @param string $pattern <p>
     * The input pattern.
     * </p>
     * @return string the pattern optimized swapping 0 or plus element to the end of the same char sequence.
     */
    public static function swapZeroOrMoreTimesChar(string $pattern): string {
        /*
         * Pega o item e verifica se o próximo é *:
            * Se for *:
                * Junta os dois (ex: [a,*] => a*)
                * Compara com o último elemento inserido na pilha:
                    * Se for igual, apenas exclui o elemento
                    * Se for diferente, insere no final
            * Se não for *:
                * Verifica se o último elemento inserido foi o mesmo caractere concatenado com *.
                    * Se igual:
                        * Remove o último elemento inserido
                        * Insere o elemento atual
                        * Insere o elemento que foi removido
                    * Se diferente insere o elemento
         *
         * */
        $stack = [];
        $index = 0;
        while ($index < strlen($pattern)) {
            if ($index + 1 < strlen($pattern) && $pattern[$index + 1] === '*') {
                $current = $pattern[$index] . $pattern[$index + 1];
                if (end($stack) != $current) {
                    $stack[] = $current;
                }
                $index += 2;
                continue;
            }

            $stackSize = count($stack);
            if (count($stack) > 0 && $stack[$stackSize - 1] === $pattern[$index] . '*') {
                $aux = $stack[$stackSize - 1];
                $stack[$stackSize - 1] = $pattern[$index];
                $stack[] = $aux;
            } else {
                $stack[] = $pattern[$index];
            }
            $index ++;
        }
        return implode($stack);
    }
}