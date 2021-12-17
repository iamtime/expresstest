<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class calcTest extends TestCase {
    public $tests = [
      [
        [2,4,3],[5,6,4]
      ],
      [
        [0],[0]
      ],
      [
        [9,9,9,9,9,9,9],[9,9,9,9]
      ],
    ];
    
    public $results = [
       [7,0,8],
       [0],
       [8,9,9,9,0,0,0,1],
    ];

    public function testCalculateExamples(): void {
      
        include('./test.php');
        
        $i = 0;
        foreach ($this->tests as $test) {
          $this->assertEquals(
              json_encode(calculate($test[0],$test[1])),
              json_encode($this->results[$i])
          );
          $i++;
        }
        
    }
}