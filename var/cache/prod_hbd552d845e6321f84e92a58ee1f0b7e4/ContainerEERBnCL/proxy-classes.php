<?php

namespace ContainerEERBnCL;


include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/Client.php';
class Client_dba3ed3 extends \Elasticsearch\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97515 = null;
    private $initializer8a2c2 = null;
    private static $publicProperties95258 = [
        'transport' => true,
    ];
    public function bulk(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'bulk', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->bulk($params);
    }
    public function clearScroll(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'clearScroll', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->clearScroll($params);
    }
    public function closePointInTime(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'closePointInTime', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->closePointInTime($params);
    }
    public function count(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'count', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->count($params);
    }
    public function create(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'create', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->create($params);
    }
    public function delete(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'delete', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->delete($params);
    }
    public function deleteByQuery(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'deleteByQuery', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->deleteByQuery($params);
    }
    public function deleteByQueryRethrottle(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'deleteByQueryRethrottle', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->deleteByQueryRethrottle($params);
    }
    public function deleteScript(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'deleteScript', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->deleteScript($params);
    }
    public function exists(array $params = []) : bool
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'exists', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->exists($params);
    }
    public function existsSource(array $params = []) : bool
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'existsSource', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->existsSource($params);
    }
    public function explain(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'explain', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->explain($params);
    }
    public function fieldCaps(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'fieldCaps', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->fieldCaps($params);
    }
    public function get(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'get', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->get($params);
    }
    public function getScript(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getScript', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getScript($params);
    }
    public function getScriptContext(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getScriptContext', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getScriptContext($params);
    }
    public function getScriptLanguages(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getScriptLanguages', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getScriptLanguages($params);
    }
    public function getSource(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getSource', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getSource($params);
    }
    public function index(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'index', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->index($params);
    }
    public function info(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'info', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->info($params);
    }
    public function mget(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'mget', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->mget($params);
    }
    public function msearch(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'msearch', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->msearch($params);
    }
    public function msearchTemplate(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'msearchTemplate', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->msearchTemplate($params);
    }
    public function mtermvectors(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'mtermvectors', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->mtermvectors($params);
    }
    public function openPointInTime(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'openPointInTime', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->openPointInTime($params);
    }
    public function ping(array $params = []) : bool
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'ping', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->ping($params);
    }
    public function putScript(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'putScript', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->putScript($params);
    }
    public function rankEval(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'rankEval', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->rankEval($params);
    }
    public function reindex(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'reindex', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->reindex($params);
    }
    public function reindexRethrottle(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'reindexRethrottle', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->reindexRethrottle($params);
    }
    public function renderSearchTemplate(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'renderSearchTemplate', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->renderSearchTemplate($params);
    }
    public function scriptsPainlessExecute(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'scriptsPainlessExecute', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->scriptsPainlessExecute($params);
    }
    public function scroll(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'scroll', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->scroll($params);
    }
    public function search(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'search', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->search($params);
    }
    public function searchMvt(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'searchMvt', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->searchMvt($params);
    }
    public function searchShards(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'searchShards', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->searchShards($params);
    }
    public function searchTemplate(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'searchTemplate', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->searchTemplate($params);
    }
    public function termsEnum(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'termsEnum', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->termsEnum($params);
    }
    public function termvectors(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'termvectors', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->termvectors($params);
    }
    public function update(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'update', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->update($params);
    }
    public function updateByQuery(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'updateByQuery', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->updateByQuery($params);
    }
    public function updateByQueryRethrottle(array $params = [])
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'updateByQueryRethrottle', array('params' => $params), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->updateByQueryRethrottle($params);
    }
    public function asyncSearch() : \Elasticsearch\Namespaces\AsyncSearchNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'asyncSearch', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->asyncSearch();
    }
    public function autoscaling() : \Elasticsearch\Namespaces\AutoscalingNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'autoscaling', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->autoscaling();
    }
    public function cat() : \Elasticsearch\Namespaces\CatNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'cat', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->cat();
    }
    public function ccr() : \Elasticsearch\Namespaces\CcrNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'ccr', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->ccr();
    }
    public function cluster() : \Elasticsearch\Namespaces\ClusterNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'cluster', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->cluster();
    }
    public function danglingIndices() : \Elasticsearch\Namespaces\DanglingIndicesNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'danglingIndices', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->danglingIndices();
    }
    public function dataFrameTransformDeprecated() : \Elasticsearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'dataFrameTransformDeprecated', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->dataFrameTransformDeprecated();
    }
    public function enrich() : \Elasticsearch\Namespaces\EnrichNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'enrich', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->enrich();
    }
    public function eql() : \Elasticsearch\Namespaces\EqlNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'eql', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->eql();
    }
    public function features() : \Elasticsearch\Namespaces\FeaturesNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'features', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->features();
    }
    public function fleet() : \Elasticsearch\Namespaces\FleetNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'fleet', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->fleet();
    }
    public function graph() : \Elasticsearch\Namespaces\GraphNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'graph', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->graph();
    }
    public function ilm() : \Elasticsearch\Namespaces\IlmNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'ilm', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->ilm();
    }
    public function indices() : \Elasticsearch\Namespaces\IndicesNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'indices', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->indices();
    }
    public function ingest() : \Elasticsearch\Namespaces\IngestNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'ingest', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->ingest();
    }
    public function license() : \Elasticsearch\Namespaces\LicenseNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'license', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->license();
    }
    public function logstash() : \Elasticsearch\Namespaces\LogstashNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'logstash', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->logstash();
    }
    public function migration() : \Elasticsearch\Namespaces\MigrationNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'migration', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->migration();
    }
    public function ml() : \Elasticsearch\Namespaces\MlNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'ml', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->ml();
    }
    public function monitoring() : \Elasticsearch\Namespaces\MonitoringNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'monitoring', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->monitoring();
    }
    public function nodes() : \Elasticsearch\Namespaces\NodesNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'nodes', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->nodes();
    }
    public function rollup() : \Elasticsearch\Namespaces\RollupNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'rollup', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->rollup();
    }
    public function searchableSnapshots() : \Elasticsearch\Namespaces\SearchableSnapshotsNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'searchableSnapshots', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->searchableSnapshots();
    }
    public function security() : \Elasticsearch\Namespaces\SecurityNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'security', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->security();
    }
    public function shutdown() : \Elasticsearch\Namespaces\ShutdownNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'shutdown', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->shutdown();
    }
    public function slm() : \Elasticsearch\Namespaces\SlmNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'slm', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->slm();
    }
    public function snapshot() : \Elasticsearch\Namespaces\SnapshotNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'snapshot', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->snapshot();
    }
    public function sql() : \Elasticsearch\Namespaces\SqlNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'sql', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->sql();
    }
    public function ssl() : \Elasticsearch\Namespaces\SslNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'ssl', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->ssl();
    }
    public function tasks() : \Elasticsearch\Namespaces\TasksNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'tasks', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->tasks();
    }
    public function textStructure() : \Elasticsearch\Namespaces\TextStructureNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'textStructure', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->textStructure();
    }
    public function transform() : \Elasticsearch\Namespaces\TransformNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'transform', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->transform();
    }
    public function watcher() : \Elasticsearch\Namespaces\WatcherNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'watcher', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->watcher();
    }
    public function xpack() : \Elasticsearch\Namespaces\XpackNamespace
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'xpack', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->xpack();
    }
    public function __call(string $name, array $arguments)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__call', array('name' => $name, 'arguments' => $arguments), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->__call($name, $arguments);
    }
    public function extractArgument(array &$params, string $arg)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'extractArgument', array('params' => $params, 'arg' => $arg), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->extractArgument($params, $arg);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->transport, $instance->params, $instance->endpoints, $instance->registeredNamespaces, $instance->asyncSearch, $instance->autoscaling, $instance->cat, $instance->ccr, $instance->cluster, $instance->danglingIndices, $instance->dataFrameTransformDeprecated, $instance->enrich, $instance->eql, $instance->features, $instance->fleet, $instance->graph, $instance->ilm, $instance->indices, $instance->ingest, $instance->license, $instance->logstash, $instance->migration, $instance->ml, $instance->monitoring, $instance->nodes, $instance->rollup, $instance->searchableSnapshots, $instance->security, $instance->shutdown, $instance->slm, $instance->snapshot, $instance->sql, $instance->ssl, $instance->tasks, $instance->textStructure, $instance->transform, $instance->watcher, $instance->xpack);
        $instance->initializer8a2c2 = $initializer;
        return $instance;
    }
    public function __construct(\Elasticsearch\Transport $transport, callable $endpoint, array $registeredNamespaces)
    {
        static $reflection;
        if (! $this->valueHolder97515) {
            $reflection = $reflection ?? new \ReflectionClass('Elasticsearch\\Client');
            $this->valueHolder97515 = $reflection->newInstanceWithoutConstructor();
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
        }
        $this->valueHolder97515->__construct($transport, $endpoint, $registeredNamespaces);
    }
    public function & __get($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__get', ['name' => $name], $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return $this->valueHolder97515->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return ($this->valueHolder97515->$name = $value);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__isset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return isset($this->valueHolder97515->$name);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__unset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            unset($this->valueHolder97515->$name);
            return;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__clone', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515 = clone $this->valueHolder97515;
    }
    public function __sleep()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__sleep', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return array('valueHolder97515');
    }
    public function __wakeup()
    {
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a2c2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a2c2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'initializeProxy', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97515;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97515;
    }
}

if (!\class_exists('Client_dba3ed3', false)) {
    \class_alias(__NAMESPACE__.'\\Client_dba3ed3', 'Client_dba3ed3', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Plugin/Composer/CommandExecutor.php';
class CommandExecutor_2fbbc6d extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97515 = null;
    private $initializer8a2c2 = null;
    private static $publicProperties95258 = [
        
    ];
    public function require(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'require', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->require($pluginComposerName, $pluginName);
return;
    }
    public function remove(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'remove', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->remove($pluginComposerName, $pluginName);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $instance, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($instance);
        $instance->initializer8a2c2 = $initializer;
        return $instance;
    }
    public function __construct(string $projectDir)
    {
        static $reflection;
        if (! $this->valueHolder97515) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
            $this->valueHolder97515 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
        }
        $this->valueHolder97515->__construct($projectDir);
    }
    public function & __get($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__get', ['name' => $name], $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return $this->valueHolder97515->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__isset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__unset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__clone', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515 = clone $this->valueHolder97515;
    }
    public function __sleep()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__sleep', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return array('valueHolder97515');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a2c2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a2c2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'initializeProxy', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97515;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97515;
    }
}

if (!\class_exists('CommandExecutor_2fbbc6d', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutor_2fbbc6d', 'CommandExecutor_2fbbc6d', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Store/Services/StoreService.php';
class StoreService_93b91c4 extends \Shopware\Core\Framework\Store\Services\StoreService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97515 = null;
    private $initializer8a2c2 = null;
    private static $publicProperties95258 = [
        
    ];
    public function fireTrackingEvent(string $eventName, array $additionalData = []) : ?array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'fireTrackingEvent', array('eventName' => $eventName, 'additionalData' => $additionalData), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->fireTrackingEvent($eventName, $additionalData);
    }
    public function getLanguageByContext(\Shopware\Core\Framework\Context $context) : string
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getLanguageByContext', array('context' => $context), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getLanguageByContext($context);
    }
    public function updateStoreToken(\Shopware\Core\Framework\Context $context, \Shopware\Core\Framework\Store\Struct\AccessTokenStruct $accessToken) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'updateStoreToken', array('context' => $context, 'accessToken' => $accessToken), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->updateStoreToken($context, $accessToken);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->client, $instance->userRepository, $instance->instanceService);
        }, $instance, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($instance);
        $instance->initializer8a2c2 = $initializer;
        return $instance;
    }
    public function & __get($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__get', ['name' => $name], $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return $this->valueHolder97515->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__isset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__unset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__clone', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515 = clone $this->valueHolder97515;
    }
    public function __sleep()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__sleep', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return array('valueHolder97515');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->client, $instance->userRepository, $instance->instanceService);
        }, $this, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a2c2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a2c2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'initializeProxy', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97515;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97515;
    }
}

if (!\class_exists('StoreService_93b91c4', false)) {
    \class_alias(__NAMESPACE__.'\\StoreService_93b91c4', 'StoreService_93b91c4', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Webhook/Hookable/HookableEventFactory.php';
class HookableEventFactory_f62e15e extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97515 = null;
    private $initializer8a2c2 = null;
    private static $publicProperties95258 = [
        
    ];
    public function createHookablesFor($event) : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'createHookablesFor', array('event' => $event), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->createHookablesFor($event);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $instance, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($instance);
        $instance->initializer8a2c2 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Core\Framework\Webhook\BusinessEventEncoder $eventEncoder, \Shopware\Core\Framework\Webhook\Hookable\WriteResultMerger $writeResultMerger)
    {
        static $reflection;
        if (! $this->valueHolder97515) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
            $this->valueHolder97515 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
        }
        $this->valueHolder97515->__construct($eventEncoder, $writeResultMerger);
    }
    public function & __get($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__get', ['name' => $name], $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return $this->valueHolder97515->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__isset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__unset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__clone', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515 = clone $this->valueHolder97515;
    }
    public function __sleep()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__sleep', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return array('valueHolder97515');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a2c2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a2c2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'initializeProxy', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97515;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97515;
    }
}

if (!\class_exists('HookableEventFactory_f62e15e', false)) {
    \class_alias(__NAMESPACE__.'\\HookableEventFactory_f62e15e', 'HookableEventFactory_f62e15e', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CloneTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/JsonSerializableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/AssignArrayTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CreateFromTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/VariablesAccessTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Struct.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Collection.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/Snippet/Files/SnippetFileCollection.php';
class SnippetFileCollection_08f09cc extends \Shopware\Core\System\Snippet\Files\SnippetFileCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97515 = null;
    private $initializer8a2c2 = null;
    private static $publicProperties95258 = [
        
    ];
    public function add($snippetFile) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'add', array('snippetFile' => $snippetFile), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->add($snippetFile);
return;
    }
    public function get($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'get', array('key' => $key), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->get($key);
    }
    public function getByName($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getByName', array('key' => $key), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getByName($key);
    }
    public function getFilesArray(bool $isBase = true) : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getFilesArray', array('isBase' => $isBase), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getFilesArray($isBase);
    }
    public function toArray() : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'toArray', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->toArray();
    }
    public function getIsoList() : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getIsoList', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getIsoList();
    }
    public function getSnippetFilesByIso(string $iso) : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getSnippetFilesByIso', array('iso' => $iso), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getSnippetFilesByIso($iso);
    }
    public function getBaseFileByIso(string $iso) : \Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getBaseFileByIso', array('iso' => $iso), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getBaseFileByIso($iso);
    }
    public function getApiAlias() : string
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getApiAlias', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getApiAlias();
    }
    public function hasFileForPath(string $filePath) : bool
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'hasFileForPath', array('filePath' => $filePath), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->hasFileForPath($filePath);
    }
    public function set($key, $element) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'set', array('key' => $key, 'element' => $element), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->set($key, $element);
return;
    }
    public function clear() : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'clear', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->clear();
return;
    }
    public function count() : int
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'count', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->count();
    }
    public function getKeys() : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getKeys', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getKeys();
    }
    public function has($key) : bool
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'has', array('key' => $key), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->has($key);
    }
    public function map(\Closure $closure) : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'map', array('closure' => $closure), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->map($closure);
    }
    public function reduce(\Closure $closure, $initial = null)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'reduce', array('closure' => $closure, 'initial' => $initial), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->reduce($closure, $initial);
    }
    public function fmap(\Closure $closure) : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'fmap', array('closure' => $closure), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->fmap($closure);
    }
    public function sort(\Closure $closure) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'sort', array('closure' => $closure), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->sort($closure);
return;
    }
    public function filterInstance(string $class)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'filterInstance', array('class' => $class), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->filterInstance($class);
    }
    public function filter(\Closure $closure)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'filter', array('closure' => $closure), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->filter($closure);
    }
    public function slice(int $offset, ?int $length = null)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'slice', array('offset' => $offset, 'length' => $length), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->slice($offset, $length);
    }
    public function getElements() : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getElements', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getElements();
    }
    public function jsonSerialize() : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'jsonSerialize', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->jsonSerialize();
    }
    public function first()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'first', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->first();
    }
    public function getAt(int $position)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getAt', array('position' => $position), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getAt($position);
    }
    public function last()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'last', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->last();
    }
    public function remove($key) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'remove', array('key' => $key), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->remove($key);
return;
    }
    public function getIterator() : \Generator
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getIterator', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getIterator();
    }
    public function assign(array $options)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'assign', array('options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->assign($options);
    }
    public function addExtension(string $name, ?\Shopware\Core\Framework\Struct\Struct $extension) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'addExtension', array('name' => $name, 'extension' => $extension), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->addExtension($name, $extension);
return;
    }
    public function addArrayExtension(string $name, array $extension) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'addArrayExtension', array('name' => $name, 'extension' => $extension), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->addArrayExtension($name, $extension);
return;
    }
    public function addExtensions(array $extensions) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'addExtensions', array('extensions' => $extensions), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->addExtensions($extensions);
return;
    }
    public function getExtension(string $name) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getExtension', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getExtension($name);
    }
    public function getExtensionOfType(string $name, string $type) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getExtensionOfType($name, $type);
    }
    public function hasExtension(string $name) : bool
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'hasExtension', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->hasExtension($name);
    }
    public function hasExtensionOfType(string $name, string $type) : bool
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'hasExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->hasExtensionOfType($name, $type);
    }
    public function getExtensions() : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getExtensions', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getExtensions();
    }
    public function setExtensions(array $extensions) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'setExtensions', array('extensions' => $extensions), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->setExtensions($extensions);
return;
    }
    public function removeExtension(string $name) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'removeExtension', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->removeExtension($name);
return;
    }
    public function getVars() : array
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getVars', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getVars();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->elements, $instance->extensions);
        $instance->initializer8a2c2 = $initializer;
        return $instance;
    }
    public function __construct(iterable $elements = [])
    {
        static $reflection;
        if (! $this->valueHolder97515) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
            $this->valueHolder97515 = $reflection->newInstanceWithoutConstructor();
        unset($this->elements, $this->extensions);
        }
        $this->valueHolder97515->__construct($elements);
    }
    public function & __get($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__get', ['name' => $name], $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return $this->valueHolder97515->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__isset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__unset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__clone', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515 = clone $this->valueHolder97515;
    }
    public function __sleep()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__sleep', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return array('valueHolder97515');
    }
    public function __wakeup()
    {
        unset($this->elements, $this->extensions);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a2c2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a2c2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'initializeProxy', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97515;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97515;
    }
}

if (!\class_exists('SnippetFileCollection_08f09cc', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetFileCollection_08f09cc', 'SnippetFileCollection_08f09cc', false);
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/StorefrontController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/ErrorController.php';
class ErrorController_b437ad9 extends \Shopware\Storefront\Controller\ErrorController implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97515 = null;
    private $initializer8a2c2 = null;
    private static $publicProperties95258 = [
        
    ];
    public function error(\Throwable $exception, \Symfony\Component\HttpFoundation\Request $request, \Shopware\Core\System\SalesChannel\SalesChannelContext $context) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'error', array('exception' => $exception, 'request' => $request, 'context' => $context), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->error($exception, $request, $context);
    }
    public function onCaptchaFailure(\Symfony\Component\Validator\ConstraintViolationList $violations, \Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'onCaptchaFailure', array('violations' => $violations, 'request' => $request), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->onCaptchaFailure($violations, $request);
    }
    public function setTwig(\Twig\Environment $twig) : void
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'setTwig', array('twig' => $twig), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515->setTwig($twig);
return;
    }
    public function setContainer(\Psr\Container\ContainerInterface $container) : ?\Psr\Container\ContainerInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'setContainer', array('container' => $container), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->setContainer($container);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->errorTemplateResolver, $instance->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $instance, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($instance);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $instance, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($instance);
        $instance->initializer8a2c2 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Storefront\Framework\Twig\ErrorTemplateResolver $errorTemplateResolver, \Shopware\Storefront\Pagelet\Header\HeaderPageletLoaderInterface $headerPageletLoader, \Shopware\Core\System\SystemConfig\SystemConfigService $systemConfigService, \Shopware\Storefront\Page\Navigation\Error\ErrorPageLoaderInterface $errorPageLoader, \Shopware\Storefront\Pagelet\Footer\FooterPageletLoaderInterface $footerPageletLoader)
    {
        static $reflection;
        if (! $this->valueHolder97515) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
            $this->valueHolder97515 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
        }
        $this->valueHolder97515->__construct($errorTemplateResolver, $headerPageletLoader, $systemConfigService, $errorPageLoader, $footerPageletLoader);
    }
    public function & __get($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__get', ['name' => $name], $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return $this->valueHolder97515->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__isset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__unset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__clone', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515 = clone $this->valueHolder97515;
    }
    public function __sleep()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__sleep', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return array('valueHolder97515');
    }
    public function __wakeup()
    {
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a2c2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a2c2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'initializeProxy', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97515;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97515;
    }
}

if (!\class_exists('ErrorController_b437ad9', false)) {
    \class_alias(__NAMESPACE__.'\\ErrorController_b437ad9', 'ErrorController_b437ad9', false);
}

include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';
class Client_b190fb5 extends \GuzzleHttp\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97515 = null;
    private $initializer8a2c2 = null;
    private static $publicProperties95258 = [
        
    ];
    public function __call($method, $args)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__call', array('method' => $method, 'args' => $args), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->__call($method, $args);
    }
    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'sendAsync', array('request' => $request, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->sendAsync($request, $options);
    }
    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'send', array('request' => $request, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->send($request, $options);
    }
    public function sendRequest(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'sendRequest', array('request' => $request), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->sendRequest($request);
    }
    public function requestAsync(string $method, $uri = '', array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'requestAsync', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->requestAsync($method, $uri, $options);
    }
    public function request(string $method, $uri = '', array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'request', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->request($method, $uri, $options);
    }
    public function getConfig(?string $option = null)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getConfig', array('option' => $option), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getConfig($option);
    }
    public function get($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'get', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->get($uri, $options);
    }
    public function head($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'head', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->head($uri, $options);
    }
    public function put($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'put', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->put($uri, $options);
    }
    public function post($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'post', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->post($uri, $options);
    }
    public function patch($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'patch', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->patch($uri, $options);
    }
    public function delete($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'delete', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->delete($uri, $options);
    }
    public function getAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'getAsync', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->getAsync($uri, $options);
    }
    public function headAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'headAsync', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->headAsync($uri, $options);
    }
    public function putAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'putAsync', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->putAsync($uri, $options);
    }
    public function postAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'postAsync', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->postAsync($uri, $options);
    }
    public function patchAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'patchAsync', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->patchAsync($uri, $options);
    }
    public function deleteAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'deleteAsync', array('uri' => $uri, 'options' => $options), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return $this->valueHolder97515->deleteAsync($uri, $options);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $instance, 'GuzzleHttp\\Client')->__invoke($instance);
        $instance->initializer8a2c2 = $initializer;
        return $instance;
    }
    public function __construct(array $config = [])
    {
        static $reflection;
        if (! $this->valueHolder97515) {
            $reflection = $reflection ?? new \ReflectionClass('GuzzleHttp\\Client');
            $this->valueHolder97515 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
        }
        $this->valueHolder97515->__construct($config);
    }
    public function & __get($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__get', ['name' => $name], $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        if (isset(self::$publicProperties95258[$name])) {
            return $this->valueHolder97515->$name;
        }
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__isset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__unset', array('name' => $name), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97515;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97515;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__clone', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        $this->valueHolder97515 = clone $this->valueHolder97515;
    }
    public function __sleep()
    {
        $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, '__sleep', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
        return array('valueHolder97515');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a2c2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a2c2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8a2c2 && ($this->initializer8a2c2->__invoke($valueHolder97515, $this, 'initializeProxy', array(), $this->initializer8a2c2) || 1) && $this->valueHolder97515 = $valueHolder97515;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97515;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97515;
    }
}

if (!\class_exists('Client_b190fb5', false)) {
    \class_alias(__NAMESPACE__.'\\Client_b190fb5', 'Client_b190fb5', false);
}
