cookbook_file "/srv/www/LoveParadoxStack/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'ubuntu'
  group 'www-data'
end
