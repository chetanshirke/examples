require 'redis'
require './config/redis_settings.rb'
class RedisController < ApplicationController
  def index
    redis = Redis.new
    redis = Redis.new(:host => "#$dbhost", :port => 6379, :password => "#$auth")
    redis.set("key", "succeeded")
    @result = redis.get("key")
  end
end
