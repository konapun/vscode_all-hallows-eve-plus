require 'test'

CONSTANT_VAR = 'string'

class Test 

    def initialize (param)
        variable = Test::Pkg.load
        @instance = Test::Pkg.new(
            :key1 => CONSTANT_VAR,
            :key2 => 123,
            :key4 => 1.0,
            :key5 => "123"
        )
    end

    def test_fn ()
        run lambda { |var|
            var.call()
        }
    end
end