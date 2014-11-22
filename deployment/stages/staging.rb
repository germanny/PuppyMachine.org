role :db,           "staging.puppymachine.org"
role :web,          "staging.puppymachine.org"

set :stage,         "staging"

# Open site after deploying
after "deploy" do
    system "open http://#{branch}.#{stage}.#{domain}/"
end
